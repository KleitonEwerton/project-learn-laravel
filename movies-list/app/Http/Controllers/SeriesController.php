<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//artisan serve
class SeriesController extends Controller{
    
    public function index(){

        $series = DB::select("SELECT name FROM series");
        // DB::delete('DELETE from series');
        // dd($series);
        return view("series.index")->with('series', $series);

    }

    public function create(){
        return view("series.create");
    }

    public function save(Request $request){

        $name = $request->input('name');
        DB::insert('INSERT INTO series (name) values (?)', [$name]);
        return redirect('/series');
    }

    public function delete(Request $request){
        $name = $request->input('name');
        DB::delete('DELETE from series WHERE (name) = ?', [$name]);
        return redirect('/series');

    }

}