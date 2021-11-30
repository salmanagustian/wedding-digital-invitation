<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;

class GuestBookController extends Controller
{
    public function list()
    {
        return Guest::latest()->paginate(3);
    }

    public function store(Request $request)
    {
        $newGuest = Guest::create($request->only(['name', 'presence', 'person', 'comment']));

        return $newGuest;
    }
}
