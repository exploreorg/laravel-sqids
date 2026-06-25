<?php

declare(strict_types=1);

namespace Workbench\App\Models;

use ExploreOrg\Sqids\Concerns\HasSqids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customer extends Model
{
    use HasSqids;

    /**
     * @return HasMany<Charge,$this>
     */
    public function charges(): HasMany
    {
        return $this->hasMany(Charge::class);
    }
}
