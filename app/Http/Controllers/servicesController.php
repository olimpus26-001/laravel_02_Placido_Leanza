<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class servicesController extends Controller
{
    public function servizi()
    {
        $arrayGames = [
            [
                'name' => "Monopoly", 
                'img' => "/img-services/monopoli.jpeg", 
                'description' => "Il gioco da tavolo piu' famoso del mondo dove ogni partita e'sempre diversa dall'altra, dove acquisti e vendi propieta', risquioti e paghi affitti, ricevi e paghi denaro da imprevisti e probabilita'. Ad oggi il gioco in assoluto piu' idoneo se si vuol far litigare coppie amorevoli o anche intere famiglie"
            ],

            [
                'name' => "Risiko", 
                'img' => "/img-services/risiko.jpg", 
                'description' => "Gioco dove la strategia e' (quasi) essenziale, strutturato su conquista di territori, raggiungimento di obiettivie combattimento basato sulla propria fortuna nei dadi (io perdo sempre)"
            ],

            [
                'name' => "Hitster", 
                'img' => "/img-services/hitster.webp", 
                'description' => "Gioco rilassante il cui scopo e' azzeccare per 5 volte l'anno di nascita di una canzone in un parco carte di oltre 200 canzoni dove la piu' recente da come data il 2019 mentre la meno recente al 1938,"
            ],

            [
                'name' => "Dama", 
                'img' => "/img-services/dama.jpg", 
                'description' => "Gioco riflessivo quasi quanto gli scacchi dove per vincere non c'entra la fortuna o la sfortuna ma solo la mente piu strategica"
            ],

            [
                'name' => "Poker", 
                'img' => "/img-services/poker.jpg", 
                'description' => "probabilmente il gioco di carte piu antico del pianeta, risalente al vecchio west dove per vincere bisogna accapparrarsi tutte le chips avversarie a suon di punteggi di carte piu' alte fra coppie, doppie coppie, tris, scale, colore, full, poker e scale reali"
            ],

            [
                'name' => "Shangai", 
                'img' => "/img-services/shangai.jpg", 
                'description' => "Probabilmente il gioco piu' semplice in assoluto, fai cadere dei bastoncini in un unico mucchio e si cerca di prendere ogni singolo bastoncino senza muoverne altri"
            ]
        ];
        return view('services' , ['games' => $arrayGames]);
    }

    public function dettaglio($name){
        $arrayGames = [
            [
                'name' => "Monopoly", 
                'img' => "/img-services/monopoli.jpeg", 
                'description' => "Il gioco da tavolo piu' famoso del mondo dove ogni partita e'sempre diversa dall'altra, dove acquisti e vendi propieta', risquioti e paghi affitti, ricevi e paghi denaro da imprevisti e probabilita'. Ad oggi il gioco in assoluto piu' idoneo se si vuol far litigare coppie amorevoli o anche intere famiglie"
            ],

            [
                'name' => "Risiko", 
                'img' => "/img-services/risiko.jpg", 
                'description' => "Gioco dove la strategia e' (quasi) essenziale, strutturato su conquista di territori, raggiungimento di obiettivie combattimento basato sulla propria fortuna nei dadi (io perdo sempre)"
            ],

            [
                'name' => "Hitster", 
                'img' => "/img-services/hitster.webp", 
                'description' => "Gioco rilassante il cui scopo e' azzeccare per 5 volte l'anno di nascita di una canzone in un parco carte di oltre 200 canzoni dove la piu' recente da come data il 2019 mentre la meno recente al 1938,"
            ],

            [
                'name' => "Dama", 
                'img' => "/img-services/dama.jpg", 
                'description' => "Gioco riflessivo quasi quanto gli scacchi dove per vincere non c'entra la fortuna o la sfortuna ma solo la mente piu strategica"
            ],

            [
                'name' => "Poker", 
                'img' => "/img-services/poker.jpg", 
                'description' => "probabilmente il gioco di carte piu antico del pianeta, risalente al vecchio west dove per vincere bisogna accapparrarsi tutte le chips avversarie a suon di punteggi di carte piu' alte fra coppie, doppie coppie, tris, scale, colore, full, poker e scale reali"
            ],

            [
                'name' => "Shangai", 
                'img' => "/img-services/shangai.jpg", 
                'description' => "Probabilmente il gioco piu' semplice in assoluto, fai cadere dei bastoncini in un unico mucchio e si cerca di prendere ogni singolo bastoncino senza muoverne altri"
            ]
        ];
        foreach($arrayGames as $game){
            if ($name == $game['name']) {
                return view('Games.dettagliGioco', ['game' => $game]);
            }
        };
    }
}