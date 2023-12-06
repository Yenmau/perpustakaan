@if (Auth::check())
    @extends('layout.menu')
    @section('content2')
        <div class="py-[80px]">
<form method="POST" novalidate="nonvalidate" action="{{ route('pinjam.store') }}" enctype="multipart/form-data"
    class="w-[1000px] mx-[50px] bg-white p-8 rounded-md shadow-md">

    @csrf

    <div class="grid grid-cols-2 gap-4 py-[10px]">
        <div class="mb-1">
            <label for="kode_pinjam" class="text-red-600 block mb-2">Nomor Peminjam</label>
            <input type="text" name="kode_pinjam" id="kode_pinjam"
                class="w-full border-2 border-red-600 p-2 rounded-md" required>
        </div>

        <div class="mb-1">
            <label for="tgl_pinjam" class="text-red-600 block mb-2">Tanggal Peminjaman</label>
            <input type="date" name="tgl_pinjam" id="tgl_pinjam"
                class="w-full border-2 border-red-600 p-2 rounded-md" required>
        </div>

        <div class="mb-1">
            <label for="kode_buku" class="text-red-600 block mb-2">Kode Buku</label>
            <select name="kode_buku" id="kode_buku"
                class="w-full border-2 border-red-600 p-2 rounded-md" required>
                <option value="">pilih</option>
                @foreach($buku as $b)
                <option value="{{ $b->kode_buku }}">{{ $b->judul_buku }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-1">
            <label for="nomor_anggota" class="text-red-600 block mb-2">Nama Anggota</label>
            <select name="nomor_anggota" id="nomor_anggota"
                class="w-full border-2 border-red-600 p-2 rounded-md" required>
                <option value="">pilih</option>
                @foreach($anggota as $b)
                <option value="{{ $b->nomor_anggota }}">{{ $b->nama_anggota }}</option>
                @endforeach
            </select>
        </div>

        <div class="flex gap-4 items-center mt-4">
            <button class="bg-red-600 text-white px-4 py-2 rounded-md" type="submit">Simpan Data</button>
            <button class="bg-red-600 text-white px-4 py-2 rounded-md" type="reset">Reset</button>
            <a href="{{ route('pinjam.index') }}" class="bg-gray-400 text-white px-4 py-2 rounded-md">Kembali</a>
        </div>
    </div>
</form>
        </div>
    @endsection
@endif

