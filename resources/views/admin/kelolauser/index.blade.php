@extends('admin.dashboard')

@section('content')
    <div class="container">
        <h2 class="text-2xl font-bold mb-4">Daftar Pengguna</h2>

        <!-- Tabel Daftar Pengguna -->
        <table class="table w-full">
            <thead>
                <tr>
                    <th class="py-2">ID</th>
                    <th class="py-2">Nama</th>
                    <th class="py-2">Email</th>
                    <th class="py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td class="py-2">{{ $user->id }}</td>
                        <td class="py-2">{{ $user->name }}</td>
                        <td class="py-2">{{ $user->email }}</td>
                        <td class="py-2">
                            <a href="{{ route('admin.kelolauser.edit', $user->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('admin.kelolauser.destroy', $user->id) }}" method="post" style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Formulir Tambah Pengguna -->
        <h2 class="text-2xl font-bold mt-8 mb-4">Tambah Pengguna</h2>
        <form action="{{ route('admin.kelolauser.store') }}" method="post" class="w-full max-w-sm">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Nama:</label>
                <input type="text" name="name" required class="form-input mt-1 block w-full rounded-md border-gray-300">
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email:</label>
                <input type="email" name="email" required class="form-input mt-1 block w-full rounded-md border-gray-300">
            </div>

            <div class="mb-4">
                <label for="password" class="block text-gray-700">Password:</label>
                <input type="password" name="password" required class="form-input mt-1 block w-full rounded-md border-gray-300">
            </div>

            <button type="submit" class="btn btn-success px-4 py-2 rounded-md">Tambah Pengguna</button>
        </form>
    </div>
@endsection
