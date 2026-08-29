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
            ['id' => '1', 'name' => 'Mr Monopoly', 'role' => "l'investitore con il fiuto per gli affari", 'img' => "/img-staff/mr monopoli.jpg" ],
            ['id' => '2', 'name' => 'Gnr Patton', 'role' => "Un grande uomo e un eccellente stratega", 'img' => "/img-staff/general_patton.jpg"],
            ['id' => '3', 'name' => 'Catman', 'role' => "L'uomo che nn sbaglia una canzone", 'img' => "/img-staff/catman.jpg"],
            ['id' => '4', 'name' => 'Pokerface', 'role' => "Non potrai mai sapere che carte ha questo individuo", 'img' => "/img-staff/pokerface.png"],
            ['id' => '5', 'name' => 'Madame Dama', 'role' => "La signora che vede ogni tua mossa", 'img' => "/img-staff/maDama.jpg"],
            ['id' => '6', 'name' => 'Satoshi Shangai', 'role' => "come maneggia le bacchette lui non le maneggia nessuno", 'img' => "/img-staff/satoshi.webp"]
        ];
        return view('aboutUs', ['staffs' => $arrayStaffs]);
    }

}
