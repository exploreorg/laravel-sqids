<?php

declare(strict_types=1);

namespace ExploreOrg\Sqids\Mixins;

use Closure;
use Illuminate\Database\Eloquent\Builder;

/** @mixin Builder */
class WhereSqidMixin
{
    public function whereSqid(): Closure
    {
        /** @phpstan-ignore-next-line */
        return fn (string $sqid) => $this->whereKey($this->getModel()->keyFromSqid($sqid));
    }
}
