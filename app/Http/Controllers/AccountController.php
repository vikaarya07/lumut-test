<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index()
    {
        $title = "Account";
        $accounts = Account::latest()->paginate(10);

        return view('account', compact('title', 'accounts'));
    }
}
