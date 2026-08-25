<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage()
    {
        $welcomeWords = [
            ['word' => 'BENVENUTI', 'color' =>'marrone'], 
            ['word' => 'NEL', 'color' =>'grigio'], 
            ['word' => 'PIU', 'color' =>'fucsia'], 
            ['word' => 'BEL', 'color' =>'arancione'], 
            ['word' => 'SITO', 'color' =>'rosso'], 
            ['word' => 'DI', 'color' =>'giallo'], 
            ['word' => 'GIOCHI', 'color' =>'verde'], 
            ['word' => 'DA', 'color' =>'nero'], 
            ['word' => 'TAVOLO', 'color' =>'blu']
        ];       
        return view('welcome', ['parole' => $welcomeWords] );
    }

    public function chiSiamo()
    {
        $arrayStaffs = [
            ['name' => 'Mr Monopoly', 'role' => "l'investitore con il fiuto per gli affari", 'img' => "/mr monopoli.jpg" ],
            ['name' => 'Gnr Patton', 'role' => "Un grande uomo e un eccellente stratega", 'img' => "/general_patton.jpg"],
            ['name' => 'Catman', 'role' => "L'uomo che nn sbaglia una canzone", 'img' => "/catman.jpg"],
            ['name' => 'Pokerface', 'role' => "Non potrai mai sapere che carte ha questo individuo", 'img' => "/pokerface.png"],
            ['name' => 'Madame Dama', 'role' => "La signora che vede ogni tua mossa", 'img' => "/maDama.jpg"],
            ['name' => 'Satoshi Shangai', 'role' => "come maneggia le bacchette lui non le maneggia nessuno", 'img' => "/satoshi.webp"]
        ];
        return view('aboutUs', ['staffs' => $arrayStaffs]);
    }

    public function servizi()
    {
        return view('services');
    }
}
