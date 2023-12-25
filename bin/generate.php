<?php

declare(strict_types=1);

const R_SEPARATOR = '/** SEPARATOR */';
const R_NAMESPACE = '/** NAMESPACE */';
const HELP = "
Usage: php generate.php /path/to/source/file.csv /destination/path/

This script will take data from the source file and generate 3 files in the destination path.

The files generated are:
    Country.php        :  String Backed Enum class for alpha2 codes - name
    CountryAlpha3.php  :  String Backed Enum class for alpha3 codes - name
    CountryService.php :  Class for various conversion operations

The data from the source file is expected to be in csv format, with no header.
These are the expected columns of the csv file:

1st column : Name of the country
2nd column : Ignored
3rd column : ISO-3166-1 alpha 2 code
4th column : ISO-3166-1 alpha 3 code
5th column : ISO-3166-1 numeric code

Example:
    Afghanistan,,AF,AFG,4
    Albania,,AL,ALB,8
    Algeria,,DZ,DZA,12
    American Samoa,,AS,ASM,16

See country codes from https://www.iso.org/obp/ui#search
";

$useNamespace = 'namespace EnumCountriesIso3166;';

if (!isset($_SERVER['argv'][1])) {
    die("ERROR: No source file specified.\n" . HELP);
}
if (!file_exists($_SERVER['argv'][1])) {
    die("ERROR: Source file was not found.\n" . HELP);
}
$sourceFile = $_SERVER['argv'][1];

if (!isset($_SERVER['argv'][2])) {
    die("ERROR: No destination directory specified.\n" . HELP);
}
if (!is_dir($_SERVER['argv'][2]) || !is_writable($_SERVER['argv'][2])) {
    die("ERROR: destination path does not exist or is not writeable.\n" . HELP);
}
$destination = $_SERVER['argv'][2];


$fp = fopen($sourceFile, 'rb');

$tab = '    ';
$alpha3map = [];
$alpha2numeric = [];
$countryAlpha2 = '';
$countryAlpha3 = '';
$countryNames = [];
while ($parts = fgetcsv($fp)) {
    $asciiCountryName = transliterator_transliterate('Any-Latin; Latin-ASCII;', $parts[0]);

    $countryAlpha2 .= $tab . 'case ' . $parts[2] . ' = \'' . $parts[2] . '\';' . "\n";
    $countryAlpha3 .= $tab . 'case ' . $parts[3] . ' = \'' . $parts[3] . '\';' . "\n";
    $alpha3map[$parts[2]] = $parts[3];
    $alpha2numeric[$parts[2]] = (int)$parts[4];
    $countryNames[$parts[2]] = $asciiCountryName;
}
fclose($fp);

$methodAlpha3 = '';
$methodAlpha2 = '';
$methodNumeric = '';
$methodFromNumeric = '';
$methodName = '';
foreach ($alpha3map as $alpha2 => $alpha3) {
    $methodAlpha3 .= "{$tab}{$tab}{$tab}case Country::{$alpha2}:\n{$tab}{$tab}{$tab}{$tab}return CountryAlpha3::{$alpha3};\n";
    $methodAlpha2 .= "{$tab}{$tab}{$tab}case CountryAlpha3::{$alpha3}:\n{$tab}{$tab}{$tab}{$tab}return Country::{$alpha2};\n";
    $methodNumeric .= "{$tab}{$tab}{$tab}case Country::{$alpha2}:\n{$tab}{$tab}{$tab}case CountryAlpha3::{$alpha3}:\n"
        . "{$tab}{$tab}{$tab}{$tab}return {$alpha2numeric[$alpha2]};\n";
    $methodFromNumeric .= "{$tab}{$tab}{$tab}{$alpha2numeric[$alpha2]} => Country::{$alpha2},\n";
    $methodName .= "{$tab}{$tab}{$tab}case Country::{$alpha2}:\n{$tab}{$tab}{$tab}case CountryAlpha3::{$alpha3}:\n"
        . "{$tab}{$tab}{$tab}{$tab}return '" . addcslashes($countryNames[$alpha2], '\'') . "';\n";
}

/** @see \EnumCountriesIso3166\Country */
$contentCountryAlpha2 = file_get_contents(__DIR__ . '/templates/Country.txt');
$contentCountryAlpha2 = str_replace(R_NAMESPACE, $useNamespace, $contentCountryAlpha2);
$parts = explode(R_SEPARATOR, $contentCountryAlpha2, 2);
$contentCountryAlpha2 = $parts[0] . rtrim($countryAlpha2) . $parts[1];

$fp = fopen($destination . 'Country.php', 'wb');
$bytes = fwrite($fp, $contentCountryAlpha2);
echo "Wrote $bytes in {$destination}Country.php\n";
fclose($fp);

/** @see \EnumCountriesIso3166\CountryAlpha3 */
$contentCountryAlpha3 = file_get_contents(__DIR__ . '/templates/CountryAlpha3.txt');
$contentCountryAlpha3 = str_replace(R_NAMESPACE, $useNamespace, $contentCountryAlpha3);
$parts = explode(R_SEPARATOR, $contentCountryAlpha3, 2);
$contentCountryAlpha3 = $parts[0] . rtrim($countryAlpha3) . $parts[1];

$fp = fopen($destination . 'CountryAlpha3.php', 'wb');
$bytes = fwrite($fp, $contentCountryAlpha3);
echo "Wrote $bytes in {$destination}CountryAlpha3.php\n";
fclose($fp);

/** @see \EnumCountriesIso3166\CountryService */
$contentCountryService = file_get_contents(__DIR__ . '/templates/CountryService.txt');
$contentCountryService = str_replace(R_NAMESPACE, $useNamespace, $contentCountryService);
$parts = explode(R_SEPARATOR, $contentCountryService);
$contentCountryService = $parts[0]
    . rtrim($methodAlpha3)
    . $parts[1]
    . rtrim($methodAlpha2)
    . $parts[2]
    . rtrim($methodNumeric)
    . $parts[3]
    . rtrim($methodFromNumeric)
    . $parts[4]
    . rtrim($methodName)
    . $parts[5];

$fp = fopen($destination . 'CountryService.php', 'wb');
$bytes = fwrite($fp, $contentCountryService);
echo "Wrote $bytes in {$destination}CountryService.php\n";
fclose($fp);
