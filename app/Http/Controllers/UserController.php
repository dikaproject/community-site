<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.kelolauser.index', compact('users'));
    }
    public function banUser($id)
{
    $users = User::find($id);

    if ($users) {
        $users->status = 'dinonaktifkan';
        $users->save();

        return redirect()->back()->with('success', 'Pengguna berhasil dinonaktifkan.');
    }

    return redirect()->back()->with('error', 'Pengguna tidak ditemukan.');
}

public function unbanUser($id)
{
    $users = User::find($id);

    if ($users) {
        $users->status = 'aktif';
        $users->save();

        return redirect()->back()->with('success', 'Pengguna berhasil diaktifkan kembali.');
    }

    return redirect()->back()->with('error', 'Pengguna tidak ditemukan.');
}
}
