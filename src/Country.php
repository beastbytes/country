<?php

declare(strict_types=1);

namespace BeastBytes\Country;

final readonly class Country
{
    /** @var string Format for addresses using vCard ADR fields */
    private string $addressFormat;
    /** @var string ISO-3166 Alpha-2 country code */
    private string $alpha2;
    /** @var string ISO-3166 Alpha-3 country code */
    private string $alpha3;
    /** @var string SVG flag */
    private string $flag;
    /** @var string International dialling code */
    private string $idc;
    /** @var string Country name in English */
    private string $name;
    /** @var string Format for addresses using vCard FN fields */
    private string $nameFormat;
    /** @var string ISO-3166 numeric country code */
    private string $numeric;
    /** @var string Country timezone(s) */
    private string $timezone;
    /** @var string Country internet top-level domain */
    private string $tld;
    
    /**
     * @param array $data Country data
     * @psalm-param <string, string> $data Country data
     */
    public function __construct(array $data)
    {
        foreach ($data as $k => $v) {
            $this->$k = $v;
        }
    }

    public function getAddressFormat(): string
    {
        return $this->addressFormat;
    }

    public function getAlpha2(): string
    {
        return $this->alpha2;
    }

    public function getAlpha3(): string
    {
        return $this->alpha3;
    }

    public function getFlag(): string
    {
        return $this->flag;
    }

    public function getIdc(): string
    {
        return $this->idc;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getNameFormat(): string
    {
        return $this->nameFormat;
    }

    public function getNumeric(): string
    {
        return $this->numeric;
    }

    public function getTimezone(): string
    {
        return $this->timezone;
    }

    public function getTld(): string
    {
        return $this->tld;
    }
}
