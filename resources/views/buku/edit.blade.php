@if (Auth::check())
    @extends('layout.menu')
    @section('content2')
        <div class="py-[80px]">
            <form method="POST" action="{{ route('buku.update', $book->kode_buku) }}"
                class="w-[1000px] mx-[50px] bg-white p-8 rounded-md shadow-md">
                @csrf
                @method('PUT')

                <div class="grid grid-cols-2 gap-4 py-[10px]">
                    <div class="mb-1">
                        <label for="kode_buku" class="text-red-600 block mb-2">Kode Buku</label>
                        <input type="text" name="kode_buku" id="kode_buku" value="{{ old('kode_buku', $book->kode_buku) }}"
                            class="w-full border-2 border-red-600 p-2 rounded-md" required>
                    </div>

                    <div class="mb-1">
                        <label for="judul_buku" class="text-red-600 block mb-2">Judul Buku</label>
                        <input type="text" name="judul_buku" id="judul_buku"
                            value="{{ old('judul_buku', $book->judul_buku) }}"
                            class="w-full border-2 border-red-600 p-2 rounded-md" required>
                    </div>

                    <div class="mb-1">
                        <label for="penerbit" class="text-red-600 block mb-2">Penerbit</label>
                        <input type="text" name="penerbit" id="penerbit" value="{{ old('penerbit', $book->penerbit) }}"
                            class="w-full border-2 border-red-600 p-2 rounded-md" required>
                    </div>

                    <div class="mb-1">
                        <label for="tahun_terbit" class="text-red-600 block mb-2">Tahun Terbit</label>
                        <input type="date" name="tahun_terbit" id="tahun_terbit"
                            value="{{ old('tahun_terbit', $book->tahun_terbit) }}"
                            class="w-full border-2 border-red-600 p-2 rounded-md" required>
                    </div>

                    <div class="mb-1">
                        <label for="isbn" class="text-red-600 block mb-2">ISBN</label>
                        <input type="text" name="isbn" id="isbn" value="{{ old('isbn', $book->isbn) }}"
                            class="w-full border-2 border-red-600 p-2 rounded-md" required>
                    </div>

                    <div class="mb-1">
                        <label for="pengarang" class="text-red-600 block mb-2">Pengarang</label>
                        <input type="text" name="pengarang" id="pengarang"
                            value="{{ old('pengarang', $book->pengarang) }}"
                            class="w-full border-2 border-red-600 p-2 rounded-md" required>
                    </div>
                    <div class="mb-1">
                        <label for="status" class="text-red-600 block mb-2">Status</label>
                        <select name="status" id="status" class="w-full border-2 border-red-600 p-2 rounded-md"
                            required>
                            <option value="0" {{ old('status', $book->status) == '0' ? 'selected' : '' }}>Tersedia
                            </option>
                            <option value="1" {{ old('status', $book->status) == '1' ? 'selected' : '' }}>Dipinjam
                            </option>
                        </select>
                    </div>

                </div>

                <div class="flex gap-4 items-center mt-4">
                    <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded-md">Simpan Data</button>
                    <button type="reset" class="bg-red-600 text-white px-4 py-2 rounded-md">Reset</button>
                </div>
            </form>
        </div>
    @endsection
@endif
