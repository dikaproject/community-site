<!-- resources/views/admin/kelolauser/edit.blade.php -->

@extends('admin.dashboard')

@section('content')
    <h1>Edit User</h1>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                        Nama
                    </th>
                    <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                        Password
                    </th>
                    <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                        Aksi
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-b border-gray-200 dark:border-gray-700">
                    <form method="post" action="{{ route('admin.kelolauser.update', $user->id) }}" class="w-full max-w-sm">
                        @csrf
                        @method('PUT')

                        <td class="bg-gray-50 px-6 py-3 dark:bg-gray-800">
                            <input type="text" name="name" value="{{ $user->name }}" required class="bg-gray-50 dark:bg-gray-800 border-none">
                        </td>
                        <td class="bg-gray-50 px-6 py-3 dark:bg-gray-800">
                            <input type="email" name="email" value="{{ $user->email }}" required class="bg-gray-50 dark:bg-gray-800 border-none">
                        </td>
                        <td class="bg-gray-50 px-6 py-3 dark:bg-gray-800">
                            <input type="password" name="password" value="{{ $user->password }}" required class="bg-gray-50 dark:bg-gray-800 border-none" >
                        </td>
                        <td class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                            <button type="submit" class="btn btn-success px-4 py-2 rounded-md">Simpan</button>
                        </td>
                    </form>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
