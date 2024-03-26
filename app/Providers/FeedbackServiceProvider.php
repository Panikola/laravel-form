<?php

namespace App\Providers;

use App\Services\DatabaseFeedbackStorage;
use App\Services\DualFeedbackStorage;
use App\Services\FeedbackStorage;
use App\Services\FileFeedbackStorage;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class FeedbackServiceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->singleton(FeedbackStorage::class, function ($app) {
            $storages = [];

            if (config('feedback.storage.database')) {
                $storages[] = $app->make(DatabaseFeedbackStorage::class);
            }

            if (config('feedback.storage.file')) {
                $storages[] = $app->make(FileFeedbackStorage::class);
            }

            if (count($storages) > 1) {
                return new DualFeedbackStorage(...$storages);
            }

            return $storages[0];
        });
    }

    public function provides(): array
    {
        return [FeedbackStorage::class];
    }
}
