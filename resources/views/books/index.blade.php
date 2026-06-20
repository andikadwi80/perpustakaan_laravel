@extends('layouts.app')

@section('content')

<div class="flex justify-between mb-6">

    <h2 class="text-3xl font-bold">
        Data Buku
    </h2>

    <a href="{{ route('books.create') }}"
       class="bg-blue-600 text-white px-4 py-2 rounded">
        + Tambah Buku
    </a>

</div>

<form method="GET" action="{{ route('books.index') }}" class="mb-5">

    <input
        type="text"
        name="search"
        placeholder="Cari buku..."
        value="{{ request('search') }}"
        class="border rounded px-4 py-2 w-full">

</form>

<div class="bg-white rounded shadow">

<table class="w-full">

    <thead class="bg-gray-200">

    <tr>
        <th class="p-3">Judul</th>
        <th class="p-3">Penulis</th>
        <th class="p-3">Penerbit</th>
        <th class="p-3">Tahun</th>
        <th class="p-3">Kategori</th>
        <th class="p-3">Aksi</th>
    </tr>

    </thead>

    <tbody>

    @forelse($books as $book)

    <tr class="border-b">

        <td class="p-3">{{ $book->judul }}</td>
        <td class="p-3">{{ $book->penulis }}</td>
        <td class="p-3">{{ $book->penerbit }}</td>
        <td class="p-3">{{ $book->tahun_terbit }}</td>
        <td class="p-3">{{ $book->kategori }}</td>

        <td class="p-3">

            <div class="flex gap-2">

                <a href="{{ route('books.edit',$book->id) }}"
                   class="bg-yellow-500 text-white px-3 py-1 rounded">
                    Edit
                </a>

                <form action="{{ route('books.destroy',$book->id) }}"
                      method="POST">

                    @csrf
                    @method('DELETE')

                    <button
                        onclick="return confirm('Yakin hapus data?')"
                        class="bg-red-600 text-white px-3 py-1 rounded">

                        Hapus

                    </button>

                </form>

            </div>

        </td>

    </tr>

    @empty

    <tr>
        <td colspan="6" class="text-center p-5">
            Data tidak ditemukan
        </td>
    </tr>

    @endforelse

    </tbody>

</table>

</div>

<div class="mt-5">
    {{ $books->links() }}
</div>

@endsection