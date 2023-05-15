<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\News;
use App\Models\Tender;

class MainController extends Controller
{
    public function index()
    {
        // if(session('locale') == 'en')
        // {
        //     $newses = News::where('language', 1)->orderBy('id', 'desc')->published()->latest()->paginate(3);
        // }

        // if(session('locale') == 'hi')
        // {
        //     $newses = News::where('language', 2)->orderBy('id', 'desc')->published()->latest()->paginate(3);
        // }

        // if(session('locale') == 'en')
        // {
        //     $events = Event::where('language', 1)->orderBy('id', 'desc')->published()->latest()->paginate(3);
        // }

        // if(session('locale') == 'hi')
        // {
        //     $events = Event::where('language', 2)->orderBy('id', 'desc')->published()->latest()->paginate(3);
        // }

        $newses = News::orderBy('id', 'desc')->published()->latest()->paginate(3);
        $events = Event::orderBy('id', 'desc')->published()->latest()->paginate(3);
        $docs = Document::orderBy('id', 'desc')->published()->take(3)->get();
        $tenders = Tender::orderBy('id', 'desc')->published()->latest()->paginate(3);
        $images = Gallery::orderBy('id', 'desc')->published()->take(10)->get();

        return view('main.home', compact('newses', 'events', 'tenders', 'docs', 'images'));
    }

    // Display Newses with pagination
    public function newses()
    {
        // if(session('locale') == 'en')
        // {
        //     $newses = News::where('language', 1)->orderBy('id', 'desc')->published()->latest()->paginate(3);
        // }

        // if(session('locale') == 'hi')
        // {
        //     $newses = News::where('language', 2)->orderBy('id', 'desc')->published()->latest()->paginate(3);
        // }

        $newses = News::orderBy('id', 'desc')->paginate(3);
        return view('news.news', compact('newses'));
    }

    // Display Single News in Detail
    public function news_details($slug)
    {
        $newsDetail = News::where('slug', $slug)->published()->first();
        // $newsDetail = News::where('slug', $slug)->first();

        if ($newsDetail) {
            return view('news.news-detail', compact('newsDetail'));
        } else {
            return view('errors.404');
        }
    }

    // Display Events with pagination
    public function events()
    {
        // if(session('locale') == 'en')
        // {
        //     $events = Event::where('language', 1)->orderBy('id', 'desc')->published()->latest()->paginate(3);
        // }

        // if(session('locale') == 'hi')
        // {
        //     $events = Event::where('language', 2)->orderBy('id', 'desc')->published()->latest()->paginate(3);
        // }

        $events = Event::orderBy('id', 'desc')->published()->latest()->paginate(3);
        return view('event.event', compact('events'));
    }

    // Display Single Event in Detail
    public function event_details($slug)
    {
        $eventDetail = Event::where('slug', $slug)->published()->first();

        if ($eventDetail) {
            return view('event.event-detail', compact('eventDetail'));
        } else {
            return view('errors.404');
        }
    }

    // Display All Images in Home Page
    public function fetchAllImages()
    {
        $images = Gallery::orderBy('id', 'DESC')->published()->latest()->paginate(21);
        return view('main.gallery', compact('images'));
    }

    // Calculate bytesToHuman format
    public static function bytesToHuman($bytes)
    {
        $units = ['B', 'KB', 'MB', 'GB'];

        for ($i = 0; $bytes > 1024; $i++) {
            $bytes /= 1024;
        }

        return round($bytes, 2) . ' ' . $units[$i];
    }
}
