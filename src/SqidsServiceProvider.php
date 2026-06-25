<?php

declare(strict_types=1);

namespace ExploreOrg\Sqids;

use ExploreOrg\Sqids\Mixins\FindBySqidMixin;
use ExploreOrg\Sqids\Mixins\FindBySqidOrFailMixin;
use ExploreOrg\Sqids\Mixins\WhereSqidInMixin;
use ExploreOrg\Sqids\Mixins\WhereSqidMixin;
use ExploreOrg\Sqids\Mixins\WhereSqidNotInMixin;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\ServiceProvider;

class SqidsServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/sqids.php', 'sqids');
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/sqids.php' => config_path('sqids.php'),
            ], 'sqids-config');
        }

        $this->bootBuilderMixins();
    }

    protected function bootBuilderMixins(): void
    {
        Builder::mixin(new FindBySqidMixin);
        Builder::mixin(new FindBySqidOrFailMixin);
        Builder::mixin(new WhereSqidInMixin);
        Builder::mixin(new WhereSqidMixin);
        Builder::mixin(new WhereSqidNotInMixin);
    }
}
