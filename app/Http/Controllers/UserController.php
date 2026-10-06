<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\User;


class UserController extends Controller
{
    public function create()
    {
        return view('register');
    } //
    public function store(StorePostRequest $request)
    {
        User::create($request->validated());// Handle the store logic h

        return view('register_success'); // ere
    }
}
