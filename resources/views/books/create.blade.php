@extends('layouts.app')

@section('content')

<h2 class="text-3xl font-bold mb-6">
    Tambah Buku
</h2>

<form action="{{ route('books.store') }}"
      method="POST"
      class="bg-white p-6 rounded shadow">

    @csrf

    <div class="mb-4">
        <label>Judul</label>
        <input
            type="text"
            name="judul"
            class="w-full border p-2 rounded">
    </div>

    <div class="mb-4">
        <label>Penulis</label>
        <input
            type="text"
            name="penulis"
            class="w-full border p-2 rounded">
    </div>

    <div class="mb-4">
        <label>Penerbit</label>
        <input
            type="text"
            name="penerbit"
            class="w-full border p-2 rounded">
    </div>

    <div class="mb-4">
        <label>Tahun Terbit</label>
        <input
            type="number"
            name="tahun_terbit"
            class="w-full border p-2 rounded">
    </div>

    <div class="mb-4">
        <label>Kategori</label>
        <input
            type="text"
            name="kategori"
            class="w-full border p-2 rounded">
    </div>

    <button
        class="bg-blue-600 text-white px-5 py-2 rounded">

        Simpan

    </button>

</form>

@endsection