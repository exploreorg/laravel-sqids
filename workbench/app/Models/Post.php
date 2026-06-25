<?php

declare(strict_types=1);

namespace Workbench\App\Models;

use ExploreOrg\Sqids\Concerns\HasSqids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasSqids;
    use SoftDeletes;

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
