# enum-countries
Provides ENUM classes for ISO-3166-1 alpha2 and alpha3 country codes.

Installation
```shell
composer require alexconrad/enum-countries
```

Usage
```php
use EnumCountriesIso3166\Country;
use EnumCountriesIso3166\CountryAlpha3;
use EnumCountriesIso3166\CountryService;

class MyClass
{
    public function __construct(
        private readonly CountryService $countryService
    ) {
    }

    public function save(Country $alpha2, CountryAlpha3 $alpha3, int $numericCode)
    {

        echo "ISO-3166-1 alpha2 Country Code:" . $alpha2->name . "\n";
        echo "ISO-3166-1 alpha3 Country Code:" . $alpha3->name . "\n";
        echo "ISO-3166-1 numeric Country Code:" . $numericCode . "\n";

        echo "Get country name from alpha2:" . $this->countryService->getName($alpha2) . "\n";
        echo "Get country name from alpha3:" . $this->countryService->getName($alpha3) . "\n";

        echo "Convert from alpha2 to alpha3:" . $this->countryService->alpha3($alpha2)->name . "\n";
        echo "Convert from alpha3 to alpha2:" . $this->countryService->alpha2($alpha3)->name . "\n";

        echo "Convert from alpha2 to numeric code:" . $this->countryService->numericCode($alpha2) . "\n";
        echo "Convert from alpha3 to numeric code:" . $this->countryService->numericCode($alpha3) . "\n";

    //From numeric code:
        echo "From numeric code to alpha2:" . $this->countryService->fromNumericCode($numericCode)->name . "\n";
    //From numeric code:
        echo "From numeric code to alpha3:" . $this->countryService->alpha3(
            $this->countryService->fromNumericCode($numericCode)
        )->name . "\n";
    }
}
```
Use your own country name
```php
use EnumCountriesIso3166\Country;
use EnumCountriesIso3166\CountryAlpha3;
use EnumCountriesIso3166\CountryService;

class MyCountryService extends CountryService
{
    public function getName(Country|CountryAlpha3 $country): string
    {
        switch ($country) {
            case Country::FR:
            case CountryAlpha3::FRA:
                return "My own naming for France";
        }

        return parent::getName($country);
    }
}
```