<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Market;

class MarketController extends Controller {
    public function index(){
        $market = Market::with("user")->
        join('users', 'users.id', '=', 'market.id_user')
        ->select("users.*", "market.*")->get();
        return view("market.index", compact('market'));
    }
}
