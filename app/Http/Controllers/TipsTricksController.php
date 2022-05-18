<?php

namespace App\Http\Controllers;

use App\Models\TipTrick;
use Illuminate\Http\Request;

class TipsTricksController extends Controller
{
    public function index(){
        return view('tiptrick/index',['tipstricks' => TipTrick::all()]);
    }
    public function detail(TipTrick $tiptrick){
        return view('tiptrick/detail',['tiptrick' => $tiptrick]);
    }
}
