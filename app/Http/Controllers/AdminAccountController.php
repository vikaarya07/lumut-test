<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Account";
        $accounts = Account::latest()->paginate(10);

        return view('dashboard.account.index', compact(
            'title',
            'accounts',
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Account";

        return view('dashboard.account.create', compact(
            'title'
        ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:accounts,email',
            'username' => 'required|string|max:255|unique:accounts,username',
            'password' => 'required|string|min:5',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        Account::create($validatedData);

        return redirect()->route('admin.account.index')->with('success', 'Akun berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Account $account)
    {
        $title = "account";

        return view('dashboard.account.edit', compact(
            'title',
            'account',
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Account $account)
    {
        $validatedData = $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:accounts,email,' . $account->id,
            'username' => 'required|string|max:255|unique:accounts,username,' . $account->id,
            'password' => 'nullable|string|min:5',
        ]);

        if ($request->filled('password')) {
            $validatedData['password'] = Hash::make($validatedData['password']);
        } else {
            unset($validatedData['password']);
        }

        $account->update($validatedData);

        return redirect()->route('admin.account.index')->with('success', 'Akun berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Account $account)
    {
        $account->delete();

        return redirect()->route('admin.account.index')->with('success', 'Account berhasil dihapus!');
    }
}
