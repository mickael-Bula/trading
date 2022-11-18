<?php

namespace App\Service;

// on précise le namespace de Goutte
use Goutte\Client;

class DataLoader
{
    public function getData() {
        // instanciation de la classe
        $client = new Client();
    
        $crawler = $client->request('GET', 'https://fr.investing.com/indices/france-40-historical-data');
    
        $rawData = $crawler
            // je filtre le document pour ne récupérer que le contenu du tableau qui m'intéresse
            ->filter('#curr_table > tbody > tr > td')
            ->each(function ($node) {
                return $node->text('rien à afficher');
            });
    
        // la fonction array_chunk() divise le tableau passé en paramètre avec une taille fixée par le second
        $splittedData = array_chunk($rawData, 7);
    
        // je boucle sur les résultats pour ne récupérer que les données utiles
        foreach($splittedData as $chunck) {
            $data[] = array_slice($chunck, 0, 5);
        }
    
        return $data;
    }
}