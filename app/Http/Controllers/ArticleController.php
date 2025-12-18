<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function articoli (){
    $articoli = [
        [
            'titolo' => 'IL PRESSING NON E\' CORSA, E\' SCELTA',
            'sottotitolo' => 'Come e perché il pressing alto può cambiare le sorti di una partita',
            'img' => 'https://www.shutterstock.com/image-vector/soccer-football-player-kicking-ball-600nw-2626942675.jpg',
            'description' => 'Pressare non vuol dire correre di più.
            Vuol dire correre meglio.

            Le squadre moderne usano il pressing per decidere dove recuperare palla e come attaccare subito.
            Quando funziona, il gol arriva quasi naturale.

            Il pressing non fa rumore.
            Ma spesso prepara il next goal.'
        ],
        [
            'titolo' => 'LA TATTICA NEL CALCIO MODERNO',
            'sottotitolo' => 'L\'evoluzione delle strategie di gioco negli ultimi decenni',
            'img' => 'https://www.shutterstock.com/image-photo/soccer-ball-net-goal-football-600nw-2659303919.jpg',
            'description' => 'Nel calcio moderno la tattica non è più una lavagna piena di frecce.
            È un insieme di idee condivise.

            Le squadre non giocano seguendo uno schema fisso, ma principi: occupare bene gli spazi, muovere la palla con tempi giusti, reagire subito alla perdita del possesso. Il modulo conta, ma è solo il punto di partenza.

            Oggi la tattica vive nei dettagli: un terzino che entra dentro al campo, una mezzala che attacca lo spazio, un attaccante che apre corridoi senza toccare palla. Sono movimenti spesso invisibili, ma decisivi.

            Capire la tattica significa guardare lontano dalla palla.
            È lì che nasce il vantaggio.
            Ed è lì che spesso nasce il next goal.'

        ]
    ];
    return view('articles', ['articoli'=> $articoli]);

}
    public function dettaglioArticolo ($titolo){
         $articoli = [
        [
            'titolo' => 'IL PRESSING NON E\' CORSA, E\' SCELTA',
            'sottotitolo' => 'Come e perché il pressing alto può cambiare le sorti di una partita',
            'img' => 'https://www.shutterstock.com/image-vector/soccer-football-player-kicking-ball-600nw-2626942675.jpg',
            'description' => 'Pressare non vuol dire correre di più.
            Vuol dire correre meglio.

            Le squadre moderne usano il pressing per decidere dove recuperare palla e come attaccare subito.
            Quando funziona, il gol arriva quasi naturale.

            Il pressing non fa rumore.
            Ma spesso prepara il next goal.'
        ],
        [
            'titolo' => 'LA TATTICA NEL CALCIO MODERNO',
            'sottotitolo' => 'L\'evoluzione delle strategie di gioco negli ultimi decenni',
            'img' => 'https://www.shutterstock.com/image-photo/soccer-ball-net-goal-football-600nw-2659303919.jpg',
            'description' => 'Nel calcio moderno la tattica non è più una lavagna piena di frecce.
            È un insieme di idee condivise.

            Le squadre non giocano seguendo uno schema fisso, ma principi: occupare bene gli spazi, muovere la palla con tempi giusti, reagire subito alla perdita del possesso. Il modulo conta, ma è solo il punto di partenza.

            Oggi la tattica vive nei dettagli: un terzino che entra dentro al campo, una mezzala che attacca lo spazio, un attaccante che apre corridoi senza toccare palla. Sono movimenti spesso invisibili, ma decisivi.

            Capire la tattica significa guardare lontano dalla palla.
            È lì che nasce il vantaggio.
            Ed è lì che spesso nasce il next goal.'
        ]
    ];

    foreach($articoli as $articolo){
        if($articolo['titolo'] == $titolo){
            return view('dettaglioarticolo', ['articolo' => $articolo]);
        
        }
            
    }
        

}
    
}
