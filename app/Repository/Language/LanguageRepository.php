<?php

namespace App\Repository\Language;

use App\Models\Language;
use App\Repository\Language\LanguageInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class LanguageRepository implements LanguageInterface
{
    public function getAllLanguages()
    {
        // Show All Newses for admin
        // if (Auth::user()->role->id == 3) {
        //     $user = Auth::user();
        //     $newses = $user->news()->where('status', '0')->orderBy('id', 'DESC')->get();
        //     return $newses;
        // }

        // Show All Languages for serveradmin
        return Language::orderBy('id', 'DESC')->get();
    }

    public function storeLanguage($data)
    {
        // Create Language


        $languages = Language::create([
            'name' => Request::input('name'),
            'slug' => Request::input('slug'),
            'direction' => Request::input('direction'),
        ]);

        $languages->save();

        return $languages;
    }

    public function getLanguage($id)
    {
        // Edit News for admin
        // if (Auth::user()->role->id == 3) {
        //     $user = Auth::user();
        //     $newses = $user->news->find($id);
        //     return $newses;
        // }

        // Edit News for serveradmin and superadmin
        return Language::find($id);
    }

    public function updateLanguage($data, $id = null)
    {
        // Update Language
        $languages = Language::find($id);

        $languages->update([
            'name' => Request::input('name'),
            'slug' => Request::input('slug'),
            'direction' => Request::input('direction'),
        ]);

        $languages->update();

        return $languages;
    }

    public function deleteLanguage($id)
    {
        // Delete Language
        $languages = Language::where('id', $id)->firstOrFail();

        if (!$languages) {
            return redirect()->route('serveradmin.language.index')->with('error', __('message.language-error'));
        } else {
            if ($languages) {
                $languages->delete();
                cleanup($languages->getTable());
            }

            return $languages;
        }
    }
}
