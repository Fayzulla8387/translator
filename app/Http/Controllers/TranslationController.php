<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TranslationController extends Controller
{
    public function index()
    {
        return view('translate');
    }

    public function translate(Request $request)
    {
        $inputText = $request->input('text');

        if ($this->isCyrillic($inputText)) {
            $translatedText = $this->convertToLatin($inputText);
        } else {
            $translatedText = $this->convertToCyrillic($inputText);
        }

        return response()->json(['translatedText' => $translatedText]);
    }

    private function isCyrillic($text)
    {
        return preg_match('/[А-Яа-яЁё]/u', $text);
    }

    private function convertToLatin($text)
    {
        $cyrillic = ['а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я'];
        $latin = ['a', 'b', 'v', 'g', 'd', 'e', 'yo', 'j', 'z', 'i', 'y', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'x', 'ts', 'ch', 'sh', 'sch', '', 'i', '', 'e', 'yu', 'ya'];

        $text=str_replace("ъ","'",$text);
        return str_replace($cyrillic, $latin, mb_strtolower($text));
    }

    private function convertToCyrillic($text)
    {
        $latin = ['a', 'b', 'v', 'g', 'd', 'e', 'yo', 'j', 'z', 'i', 'y', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'x', 'ts', 'ch', 'sh', 'sch', 'i', 'e', 'yu', 'ya'];
        $cyrillic = ['а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'щ', 'ы', 'э', 'ю', 'я'];

        // Tutuq belgisini `ъ` ga almashtirish
        $text = str_replace("'", "ъ", $text);

        return str_replace($latin, $cyrillic, mb_strtolower($text));
    }
}
