<?php

declare(strict_types=1);

namespace BeastBytes\Country;

interface CountryFactoryInterface
{
    public function create(string $search): ?Country;
}
