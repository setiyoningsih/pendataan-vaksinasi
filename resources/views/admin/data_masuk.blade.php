@extends ('layout.main')

	@section ('content')
        <!-- Template PhotoSwipe -->
        <script src="{{ asset('data_masuk/dist/js/lightgallery.min.js') }}"></script>
        
        <!-- lightgallery plugins -->
        <script src="{{ asset('data_masuk/js/lg-autoplay.min.js') }}"></script>
        <script src="{{ asset('data_masuk/js/lg-fullscreen.min.js') }}"></script>
        <script src="{{ asset('data_masuk/js/lg-hash.min.js') }}"></script>
        <script src="{{ asset('data_masuk/js/lg-pager.min.js') }}"></script>
        <script src="{{ asset('data_masuk/js/lg-rotate.min.js') }}"></script>
        <script src="{{ asset('data_masuk/js/lg-share.min.js') }}"></script>
        <script src="{{ asset('data_masuk/js/lg-thumbnail.min.js') }}"></script>
        <script src="{{ asset('data_masuk/js/lg-video.min.js') }}"></script>
        <script src="{{ asset('data_masuk/js/lg-zoom.min.js') }}"></script>

        <style>
            #lightgallery a {
                display: none;
            }
            #lightgallery a:first-child {
                display: block;
            }
        </style>

        <style>
            #lightgallery1 a {
                display: none;
            }
            #lightgallery1 a:first-child {
                display: block;
            }
        </style>

		@section ('breadcrumb')
			<h4 class="page-title">Data Masuk</h4>
    		<nav aria-label="breadcrumb">
    			<ol class="breadcrumb">
    				<li class="breadcrumb-item"><a href="#">Tabel</a></li>                    
    				<li class="breadcrumb-item active" aria-current="page">Data Masuk</li>
    			</ol>
    		</nav>
    	@endsection

    	<table class="table table-bordered">
    		<thead class="bg-warning">
    			<tr style="text-align: center;">
    				<th scope="col">No</th>
    				<th scope="col">Nama</th>
    				<th scope="col">NIK</th>
                    <th scope="col">Tanggal Lahir</th>
    				<th scope="col">RT/RW</th>
                    <th scope="col">Sertifikat</th>
    				<th scope="col">Konfirmasi</th>
    			</tr>
    		</thead>
    		<tbody>
                @foreach($pendataan as $value)
                    <tr style="text-align: center;">
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $value->nama }}</td>
                        <td>{{ $value->nik }}</td>
                        <td>{{ $value->tanggal_lahir }}</td>
                        <td>{{ $value->rt }}/{{ $value->rw }}</td>
                        <td style="width: 30%;">
                            <div id="lightgallery">
                                <a href="{{ Storage::url($value->sertifikat) }}">
                                    <img src="{{ Storage::url($value->sertifikat) }}" style="width: 20%;">
                                </a>
                            </div>
                        </td>
                        <td>
                            <a href="/admin/data-masuk/valid/{{$value->id}}">
                                <i class="fas fa-check-circle fa-2x" title="Terima"></i>
                            </a>
                            <a href="" data-toggle="modal" onclick="return confirm('Yakin ingin menghapus Data?')">
                                <i class="fas fa-times-circle fa-2x" title="Tolak"></i>
                            </a>            
                        </td>
                    </tr>
                @endforeach
    		</tbody>
    	</table>    

        <script>
            lightGallery(document.getElementById('lightgallery'));
        </script>	

    @endsection