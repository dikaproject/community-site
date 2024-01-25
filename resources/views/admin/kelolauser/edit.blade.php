<!-- resources/views/admin/kelolauser/edit.blade.php -->

@extends('admin.dashboard')

@section('content')
    <h1>Edit User</h1>

    <form method="post" action="{{ route('admin.kelolauser.update', $user->id) }}">
        @csrf
        @method('PUT')

        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ $user->name }}" required>

        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ $user->email }}" required>

        <button type="submit">Simpan Perubahan</button>
    </form>
@endsection
