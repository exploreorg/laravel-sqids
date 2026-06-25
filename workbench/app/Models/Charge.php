<?php

declare(strict_types=1);

namespace Workbench\App\Models;

use ExploreOrg\Sqids\Concerns\HasSqids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Charge extends Model
{
    use HasSqids;

    protected string $sqidPrefix = 'ch';

    /**
     * @return BelongsTo<Customer,$this>
     */
    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }
}
