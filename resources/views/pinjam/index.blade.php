<head>
    <!-- Other head elements -->

</head>

@if (Auth::check())
    @extends('layout.menu')
    @section('content2')
        <!-- Content -->
        <div class="py-[40px]">
            <div class="mb-[10px]">
                <button>
                    <a href="{{ route('pinjam.create') }}" class="bg-red-600 text-white px-4 py-2 rounded">Tambah Data</a>
                </button>
                <a href="javascript:printDiv('printly');" class="bg-red-600 py-2 text-white rounded px-4">
                    <i class="fa fa-print"></i>&nbsp;Cetak
                </a>
            </div>



            <table id="datatable" class="border-collapse border border-black mt-[15px]">
                @csrf
                <thead class="bg-red-600 text-white">
                    <tr class="text-center">
                        <th class="border border-black">No</th>
                        <th class="border border-black">Kode Pinjam</th>
                        <th class="border border-black">Judul Buku</th>
                        <th class="border border-black">Nama Anggota</th>
                        <th class="border border-black">Kelas</th>
                        <th class="border border-black">Tanggal Pinjam</th>
                        <th class="border border-black">Tanggal Kembali</th>
                        <th class="border border-black">Status</th>
                        <th class="border border-black w-[130px]">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($pinjam as $d)
                        <tr class="text-center">
                            <td class="border border-black p-3">{{ $loop->iteration }}</td>
                            <td class="border border-black">{{ $d->kode_pinjam }}</td>
                            <td class="border border-black">{{ $d->judul_buku }}</td>
                            <td class="border border-black">{{ $d->nama_anggota }}</td>
                            <td class="border border-black">{{ $d->kelas }}</td>
                            <td class="border border-black">{{ $d->tgl_pinjam }}</td>
                            <td class="border border-black">{{ $d->tgl_kembali }}</td>
                            <td
                                class="border border-black {{ $d->status == 1 ? 'bg-red-600 text-white' : 'bg-green-600 text-white' }} p-3">
                                {{ $d->status == 1 ? 'Dipinjam' : 'Dikembalikan' }}
                            </td>
                            <td class="border border-black">
                                <form onsubmit="return confirm('Yakin dihapus');" method="POST"
                                    action="{{ route('pinjam.destroy', $d->kode_pinjam) }} " class=" flex space-x-2">
                                    <a href="{{ route('pinjam.kembali', $d->kode_pinjam) }}" class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor"
                                            class="w-10 h-10 mt-3 bg-amber-500 text-white px-2 py-1.5 rounded">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                                        </svg>
                                    </a>
                                    <a href="{{ route('pinjam.edit', $d->kode_pinjam) }}" class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor"
                                            class="w-10 h-10 mt-3 bg-blue-600 text-white  py-1.5 rounded">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                        </svg>
                                    </a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="mt-3 bg-red-600 text-white px-2 py-1.5 rounded">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                        </svg>
                                    </button>
                                </form>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
            <script>
                setTimeout(function() {
                    document.getElementById('flash').style.display = 'none';
                }, 3000);
            </script>
        </div>

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

        <!-- End Content -->
        </body>

        <!-- Print -->
        <iframe id="printing-frame" name="print_frame" src="about:blank" style="display:none;"></iframe>
        <script type="text/javascript">
            function printDiv(divId) {
                var printContents = document.getElementById(divId).innerHTML;
                var originalContents = document.body.innerHTML;
                document.body.innerHTML = printContents;

                var style = document.createElement('style');
                style.innerHTML = `
				@page {
					size: landscape;
					margin: 20mm;
				}
			`;
                document.head.appendChild(style);

                window.print();
                document.body.innerHTML = originalContents;
            }
        </script>

        <div class="hidden">
            <div id="printly">
                <table class="w-full border-collapse border-2 border-black">
                    @csrf
                    <thead>
                        <tr class="text-center">
                            <th class="border border-black">No</th>
                            <th class="border border-black ">Kode Pinjam</th>
                            <th class="border border-black ">Judul Buku</th>
                            <th class="border border-black ">Nama Anggota</th>
                            <th class="border border-black">Kelas</th>
                            <th class="border border-black ">Tanggal Pinjam</th>
                            <th class="border border-black ">Tanggal Kembali</th>
                            <th class="border border-black ">Status</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($pinjam as $d)
                            <tr class="text-center">
                                <td class="border border-black p-3">{{ $loop->iteration }}</td>
                                <td class="border border-black">{{ $d->kode_pinjam }}</td>
                                <td class="border border-black">{{ $d->judul_buku }}</td>
                                <td class="border border-black">{{ $d->nama_anggota }}</td>
                                <td class="border border-black">{{ $d->kelas }}</td>
                                <td class="border border-black">{{ $d->tgl_pinjam }}</td>
                                <td class="border border-black">{{ $d->tgl_kembali }}</td>
                                <td class="border border-black"> {{ $d->status == 1 ? 'Dipinjam' : 'Dikembalikan' }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- End Print -->

        </html>
    @endsection
@endif
