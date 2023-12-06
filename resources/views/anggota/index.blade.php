@if (Auth::check())

    @extends('layout.menu')
    @section('content2')
        <!-- Content -->
        <div class="py-[40px] ml-[100px]">
            <button class="mb-[10px]">
                <a href="{{ route('anggota.create') }}" class="bg-red-600 text-white px-4 py-2 rounded">Tambah Data</a>
            </button>
            


            <table id="datatable" class="border-collapse border border-black mt-[15px]">
                @csrf
                <thead class="bg-red-600 text-white">
                    <tr class="text-center">
                        <th class="border border-black">No</th>
                        <th class="border border-black">Nomor Anggota</th>
                        <th class="border border-black">Nama Anggota</th>
                        <th class="border border-black">Jenis Kelamin</th>
                        <th class="border border-black">Kelas</th>
                        <th class="border border-black">Angkatan</th>
                        <th class="border border-black">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($agt as $d)
                        <tr class="text-center">
                            <td class="border border-black p-3">{{ $loop->iteration }}</td>
                            <td class="border border-black ">{{ $d->nomor_anggota }}</td>
                            <td class="border border-black ">{{ $d->nama_anggota }}</td>
                            <td class="border border-black ">{{ $d->jenis_kelamin }}</td>
                            <td class="border border-black ">{{ $d->kelas }}</td>
                            <td class="border border-black ">{{ $d->angkatan }}</td>
                            <td class="border border-black pb-2">
                                <form onsubmit="return confirm('Yakin dihapus');" method="POST"
                                    action="{{ route('anggota.destroy', $d->nomor_anggota) }}"
                                    class=" flex space-x-2  justify-center">
                                    <a href="{{ route('anggota.edit', $d->nomor_anggota) }}"><svg
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor"
                                            class="w-10 h-10 mt-3 bg-blue-600 text-white  py-1.5 rounded">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                        </svg></a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-600 text-white px-2 mt-3 rounded">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                        </svg></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- End Content -->
        <script>
            $(document).ready(function() {
                // Initialize DataTable with the ID 'datatable'
                var table = $('#datatable').DataTable({
                    // Add any DataTable options you need
                });

                // Add a search bar with an event listener
                $('#datatable-search-input').on('keyup', function() {
                    table.search(this.value).draw();
                });
            });
        </script>
        </body>

        </html>
    @endsection
@endif
