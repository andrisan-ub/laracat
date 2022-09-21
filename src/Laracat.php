<?php

namespace Andrisan\Laracat;

use Illuminate\Support\Facades\Http;

class Laracat
{
    public function getCat(){
        $response = Http::get('https://api.thecatapi.com/v1/images/search');
        $imgUrl = $response->json()[0]['url'];
        // html img tag using imgUrl
        return '<img src="'.$imgUrl.'" alt="cat">';
    }
}
