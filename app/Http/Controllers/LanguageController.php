<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLanguageRequest;
use App\Http\Requests\UpdateLanguageRequest;
use App\Models\Language;
use App\Repository\Language\LanguageInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function switchLang($lang)
    {
        if (array_key_exists($lang, Config::get('languages'))) {
            Session::put('locale', $lang);
        }
        return redirect()->back();
    }

    // Manage Language by Admin Portal
    protected $language;

    public function __construct(LanguageInterface $language)
    {
        $this->language = $language;
    }

    public function index()
    {
        $languages = $this->language->getAllLanguages();

        // Show Language
        if (Auth::user()->role->id == '1' && View::exists('serveradmin.language.index')) {
            return view('serveradmin.language.index', compact('languages'));
        }
    }

    public function create()
    {
        // Create Language
        if (Auth::user()->role->id == '1' && View::exists('serveradmin.language.create')) {
            return view('serveradmin.language.create');
        } else {
            return view('errors.404');
        }
    }

    public function store(StoreLanguageRequest $request)
    {
        // Store Language
        $this->language->storeLanguage($request->validated());

        if (Auth::user()->role->id == '1') {
            return redirect()->route('serveradmin.language.index')->with('success', __('message.language-success'));
        }
    }

    public function edit($id)
    {
        $language = $this->language->getLanguage($id);

        // Edit Language
        if ($language) {
            if (Auth::user()->role->id == '1') {
                return view('serveradmin.language.edit', compact('language'));
            }
        } else {
            if (Auth::user()->role->id == '1') {
                return redirect()->route('serveradmin.language.index')->with('error', __('message.language-error'));
            }
        }
    }

    public function update(UpdateLanguageRequest $request, $id)
    {
        // Update Language
        $this->language->updateLanguage($request->validated(), $id);

        if (Auth::user()->role->id == '1') {
            return redirect()->route('serveradmin.language.index')->with('success', __('message.language-update'));
        }
    }

    public function destroy($id)
    {
        // Delete Language
        $this->language->deleteLanguage($id);

        if (Auth::user()->role->id == '1') {
            return redirect()->back()->with('error', __('message.language-delete'));
        }
    }

    public function changeLanguageStatus(Request $request)
    {
        $language = Language::find($request->lang_id);
        $language->status = $request->status;
        $language->save();

        if ($language->status == 0) {
            return response()->json(['message' => 'Language has been published.']);
        } else if ($language->status == 1) {
            return response()->json(['message' => 'Language has been unpublished.']);
        } else {
            return response()->json(['message' => 'Something went wrong !!']);
        }
    }
}
