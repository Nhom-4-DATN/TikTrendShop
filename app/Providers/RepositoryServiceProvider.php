<?php

namespace App\Providers;

use App\Models\Store;
use App\Policies\StoresPolicy;
use app\Repository\CategoryBlog\CategoryBlogInterface;
use app\Repository\CategoryBlog\CategoryRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */

    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->app->bind(CategoryBlogInterface::class, CategoryRepository::class);
    }
}
