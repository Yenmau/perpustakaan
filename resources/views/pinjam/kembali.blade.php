@if (Auth::check())
    @extends('layout.menu')
    @section('content2')
        <div class="py-[80px]">
            <form method="POST" action="{{ route('pinjam.simpan_kembali', $pinjam->kode_pinjam) }}"
                class="w-[1000px] mx-[50px] bg-white p-8 rounded-md shadow-md">
                @csrf
                @method('PUT')

                <div class="grid grid-cols-2 gap-4 py-[10px]">
                    <div class="mb-1">
                        <label for="kode_pinjam" class="text-red-600 block mb-2">Kode Pinjam</label>
                        <input type="text" name="kode_pinjam" id="kode_pinjam"
                            value="{{ old('kode_pinjam', $pinjam->kode_pinjam) }}"
                            class="w-full border-2 border-red-600 p-2 rounded-md" required disabled>
                    </div>

                    <div class="mb-1">
                        <label for="tgl_pinjam" class="text-red-600 block mb-2">Tanggal Pinjam</label>
                        <input type="date" name="tgl_pinjam" id="tgl_pinjam"
                            value="{{ old('tgl_pinjam', $pinjam->tgl_pinjam) }}"
                            class="w-full border-2 border-red-600 p-2 rounded-md" required disabled>
                    </div>

                    <div class="mb-1">
                        <label for="tgl_kembali" class="text-red-600 block mb-2">Tanggal Kembali</label>
                        <input type="date" name="tgl_kembali" id="tgl_kembali" 
                            class="w-full border-2 border-red-600 p-2 rounded-md" required>
                    </div>

                    <div class="mb-1">
                        <label for="kode_buku" class="text-red-600 block mb-2">Kode Buku</label>
                        <select name="kode_buku" id="kode_buku" class="w-full border-2 border-red-600 p-2 rounded-md"
                            required readonly>
                            @foreach ($buku as $b)
                                <option value="{{ $b->kode_buku }}"
                                    {{ old('kode_buku', $pinjam->kode_buku) == $b->kode_buku ? 'selected' : '' }}>
                                    {{ $b->judul_buku }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-1">
                        <label for="nomor_anggota" class="text-red-600 block mb-2">Nama Anggota</label>
                        <select name="nomor_anggota" id="nomor_anggota"
                            class="w-full border-2 border-red-600 p-2 rounded-md" required disabled>
                            @foreach ($anggota as $a)
                                <option value="{{ old('nomor_anggota', $a->nomor_anggota) }} ">
                                    {{ $a->nama_anggota }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="flex gap-4 items-center mt-4">
                    <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded-md">Simpan Data</button>
                    <button type="reset" class="bg-red-600 text-white px-4 py-2 rounded-md">Reset</button>
                    <a href="{{ route('pinjam.index') }}" class="bg-gray-400 text-white px-4 py-2 rounded-md">Kembali</a>
                </div>
            </form>
        </div>
    @endsection
@endif
