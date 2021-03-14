<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    // micropostをお気に入り追加するアクション
    public function store($micropostId)
    {
        \Auth::user()->favorite($micropostId);
        
        return back();
    }
    
    public function destroy($micropostId)
    {
        // micropostをお気に入り削除するアクション
       \Auth::user()->unfavorite($micropostId);
       
       return back();
    }
}
