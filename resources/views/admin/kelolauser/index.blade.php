@extends('admin.dashboard')

@section('content')
    <div class="container">
        <h2 class="text-2xl font-bold mb-4">Daftar Pengguna</h2>

        <!-- Tabel Daftar Pengguna -->
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                            ID
                        </th>
                        <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800"">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                            Edit
                        </th>
                        <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                            Hapus
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr class="border-b border-gray-200 dark:border-gray-700">
                            <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">{{ $user->id }}</td>
                            <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">{{ $user->name }}</td>
                            <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">{{ $user->email }}</td>
                            <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                                <a href="{{ route('admin.kelolauser.edit', $user->id) }}" class="btn btn-warning">Edit</a>
                            </td>
                            <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                                <form action="{{ route('admin.kelolauser.destroy', $user->id) }}" method="post" >
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Formulir Tambah Pengguna -->
        <h2 class="text-2xl font-bold mt-8 mb-4">Tambah Pengguna</h2>
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
                        <form action="{{ route('admin.kelolauser.store') }}" method="post" class="w-full max-w-sm">
                            @csrf
                            <td class="bg-gray-50 px-6 py-3 dark:bg-gray-800">
                                <input type="text" name="name" required class="bg-gray-50 dark:bg-gray-800 border-none">
                            </td>
                            <td class="bg-gray-50 px-6 py-3 dark:bg-gray-800">
                                <input type="email" name="email" required class="bg-gray-50 dark:bg-gray-800 border-none">
                            </td>
                            <td class="bg-gray-50 px-6 py-3 dark:bg-gray-800">
                                <input type="password" name="password" required class="bg-gray-50 dark:bg-gray-800 border-none">
                            </td>
                            <td class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                                <button type="submit" class="btn btn-success px-4 py-2 rounded-md">Tambah Pengguna</button>
                            </td>
                        </form>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
