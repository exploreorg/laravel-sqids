<?php

declare(strict_types=1);

use ExploreOrg\Sqids\Prefixes\SimplePrefix;
use Workbench\App\Models\Charge;
use Workbench\App\Models\Customer;

it('can generate a default prefix', function (): void {
    expect(new SimplePrefix)
        ->prefix(Customer::class)
        ->toBe('cus')
        ->prefix(Charge::class)
        ->toBe('cha');
});
