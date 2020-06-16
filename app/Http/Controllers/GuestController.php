<?php

namespace App\Http\Controllers;

use App\Entry;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index(){
        $entries = Entry::with('user')
                    ->orderByDesc('created_at')
                    ->orderByDesc('id')
                    ->paginate(3);
        return view('guest.index',compact('entries'));
    }

    public function show(Entry $entry){
        
        return view('entries.show',compact('entry'));
    }

    
}
