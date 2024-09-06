<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stichoza\GoogleTranslate\GoogleTranslate;

class TranslateController extends Controller
{
    public function showMultiTranslatePage()
    {
        return view('multi_translate');
    }

    public function multiTranslate(Request $request)
    {
        $text = $request->input('text');
        $sourceLang = $request->input('sourceLang');
        $targetLang = $request->input('targetLang');

        try {
            $tr = new GoogleTranslate();
            $tr->setSource($sourceLang);
            $tr->setTarget($targetLang);
            $translatedText = $tr->translate($text);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Tarjima qilishda xatolik yuz berdi: ' . $e->getMessage()], 500);
        }

        return response()->json(['translatedText' => $translatedText]);
    }
}
