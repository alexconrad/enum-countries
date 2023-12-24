<?php

declare(strict_types=1);

namespace Tests\EnumCountriesIso3166;

use EnumCountriesIso3166\Country;
use EnumCountriesIso3166\CountryAlpha3;
use EnumCountriesIso3166\CountryService;
use PHPUnit\Framework\TestCase;

class CountryServiceTest extends TestCase
{
    public static function alpha2Provider(): array
    {
        return [
            ...array_map(static function ($item) {
                return [$item];
            }, Country::cases())
        ];
    }

    public static function alpha3Provider(): array
    {
        return [
            ...array_map(static function ($item) {
                return [$item];
            }, CountryAlpha3::cases())
        ];
    }

    protected function setUp(): void
    {
        $this->sut = new CountryService();
        parent::setUp();
    }

    /**
     * @dataProvider alpha2Provider
     * @param  Country  $alpha2
     * @return void
     */
    public function testAlpha3Conversion(Country $alpha2): void
    {
        $alpha3 = $this->sut->alpha3($alpha2);
        $sameAlpha2 = $this->sut->alpha2($alpha3);
        self::assertSame($alpha2, $sameAlpha2, $alpha2->name . " conversion failed.");
    }

    /**
     * @dataProvider alpha2Provider
     * @param  Country  $alpha2
     * @return void
     */
    public function testAlpha2Numeric(Country $alpha2): void
    {
        $numeric = $this->sut->numericCode($alpha2);
        $sameAlpha2 = $this->sut->fromNumericCode($numeric);
        self::assertSame($alpha2, $sameAlpha2, $alpha2->name . " numeric conversion failed.");
    }

    /**
     * @dataProvider alpha3Provider
     * @param  CountryAlpha3  $alpha3
     * @return void
     */
    public function testAlpha2Conversion(CountryAlpha3 $alpha3): void
    {
        $alpha2 = $this->sut->alpha2($alpha3);
        $sameAlpha3 = $this->sut->alpha3($alpha2);
        self::assertSame($alpha3, $sameAlpha3, $alpha3->name . " conversion failed.");
    }

    /**
     * @dataProvider alpha3Provider
     * @param  CountryAlpha3  $alpha3
     * @return void
     */
    public function testAlpha3Numeric(CountryAlpha3 $alpha3): void
    {
        $numeric = $this->sut->numericCode($alpha3);
        $alpha2 = $this->sut->fromNumericCode($numeric);
        $sameAlpha3 = $this->sut->alpha3($alpha2);
        self::assertSame($alpha3, $sameAlpha3, $alpha3->name . " numeric conversion failed.");
    }
}
