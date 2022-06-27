<?php
namespace App\Http\Controllers;

class SeriesController{
    
    public function seriesList(){
        $series = ["Lost", "Arcane", "Breaking Bad", "The Big Bang Theory", "The Walking Dead"];
        
        $html = '<ul>';

        foreach($series as $serie):

            $html .= '<li> '.$serie. '</li>';

        endforeach;

        $html .= "</ul>";

        echo $html;

    }


}