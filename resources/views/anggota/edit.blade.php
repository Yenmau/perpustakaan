@if (Auth::check())
    @extends('layout.menu')
    @section('content2')
        <div class="py-[80px]">
            <form method="POST" novalidate="nonvalidate" action="{{ route('anggota.update', $agt->nomor_anggota) }}"
                enctype="multipart/form-data" class="w-[1000px] mx-[50px] bg-white p-8 rounded-md shadow-md">
                @csrf
                @method('PUT')

                <div class="grid grid-cols-2 gap-4 py-[10px]">
                    <div class="mb-1">
                        <label for="nomor_anggota" class="text-red-600 block mb-2">Nomor Anggota</label>
                        <input type="text" name="nomor_anggota" id="nomor_anggota"
                            value="{{ old('nomor_anggota', $agt->nomor_anggota) }}"
                            class="w-full border-2 border-red-600 p-2 rounded-md" required>
                    </div>

                    <div class="mb-1">
                        <label for="nama_anggota" class="text-red-600 block mb-2">Nama Anggota</label>
                        <input type="text" name="nama_anggota" id="nama_anggota"
                            value="{{ old('nama_anggota', $agt->nama_anggota) }}"
                            class="w-full border-2 border-red-600 p-2 rounded-md" required>
                    </div>

                    <div class="mb-1">
                        <label for="jenis_kelamin" class="text-red-600 block mb-2">Jenis Kelamin</label>
                        <select name="jenis_kelamin" id="jenis_kelamin"
                            class="w-full border-2 border-red-600 p-2 rounded-md" required>
                            <option value="Laki-laki" {{ $agt->jenis_kelamin === 'Laki-laki' ? 'selected' : '' }}>Laki-laki
                            </option>
                            <option value="Perempuan" {{ $agt->jenis_kelamin === 'Perempuan' ? 'selected' : '' }}>Perempuan
                            </option>
                        </select>
                    </div>

                    <div class="mb-1">
                        <label for="kelas" class="text-red-600 block mb-2">Kelas</label>
                        <input type="text" name="kelas" id="kelas" value="{{ old('kelas', $agt->kelas) }}"
                            class="w-full border-2 border-red-600 p-2 rounded-md" required>
                    </div>

                    <div class="mb-1">
                        <label for="angkatan" class="text-red-600 block mb-2">Angkatan</label>
                        <input type="text" name="angkatan" id="angkatan" value="{{ old('angkatan', $agt->angkatan) }}"
                            class="w-full border-2 border-red-600 p-2 rounded-md" required>
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
