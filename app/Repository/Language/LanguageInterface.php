<?php

namespace App\Repository\Language;

interface LanguageInterface
{
    public function getAllLanguages();
    public function storeLanguage($data);
    public function getLanguage($id);
    public function updateLanguage($data, $id = null);
    public function deleteLanguage($id);
}
