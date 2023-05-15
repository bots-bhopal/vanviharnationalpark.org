<?php

namespace App\Providers;

use App\Repository\Document\DocumentInterface;
use App\Repository\Document\DocumentRepository;
use App\Repository\Event\EventInterface;
use App\Repository\Event\EventRepository;
use App\Repository\Gallery\GalleryInterface;
use App\Repository\Gallery\GalleryRepository;
use App\Repository\News\NewsInterface;
use App\Repository\News\NewsRepository;
use App\Repository\Tender\TenderInterface;
use App\Repository\Tender\TenderRepository;
use App\Repository\Language\LanguageInterface;
use App\Repository\Language\LanguageRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(NewsInterface::class, NewsRepository::class);
        $this->app->bind(EventInterface::class, EventRepository::class);
        $this->app->bind(TenderInterface::class, TenderRepository::class);
        $this->app->bind(DocumentInterface::class, DocumentRepository::class);
        $this->app->bind(GalleryInterface::class, GalleryRepository::class);
        $this->app->bind(LanguageInterface::class, LanguageRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
