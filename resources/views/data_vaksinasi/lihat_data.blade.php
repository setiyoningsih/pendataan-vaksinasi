@extends ('layout.main')

	@section ('content')

		@section ('breadcrumb')
			<h4 class="page-title">Data Vaksinasi</h4>
    		<nav aria-label="breadcrumb">
    			<ol class="breadcrumb">
    				<li class="breadcrumb-item"><a href="/admin/data-vaksinasi">Tabel</a></li>                    
    				<li class="breadcrumb-item active" aria-current="page">Data Vaksinasi</li>
    			</ol>
    		</nav>
    	@endsection

        @if ($message = Session::get('pesan'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>    
                <strong>{{ $message }}</strong>
            </div>
        @endif
        
    	<div class="row" style= "float: right; margin-bottom: 10px;">
    		<a href="/admin/data-vaksinasi/tambah" class="btn btn-success"  style="width: 37%; margin-right: 5px; line-height: 25px;">
    			<i class="fas fa-plus"></i>
    			Tambah data
    		</a>
    		<form>
    			<div class="search-box" style="width: 95%;">
    				<input type="text" class="form-control" name="kata" placeholder="Search...">
    			</div>
    		</form>
    	</div>

        @if(request()->query('kata'))
            @if($vaksinasi->isEmpty())
                <div class="row">
                    <div class="alert alert-danger" role="alert">
                        Hasil tidak ditemukan
                    </div>
                </div>
            @else
                <div class="row">
                    <div class="alert alert-info" role="alert">
                        Hasil ditemukan
                    </div>
                </div>
            @endif
        @endif
    	

    	<table class="table table-bordered">
    		<thead class="bg-warning">
    			<tr style="text-align: center;">
    				<th scope="col">No</th>
    				<th scope="col">Nama</th>
    				<th scope="col">NIK</th>
                    <th scope="col">Tanggal Lahir</th>
    				<th scope="col">RT</th>
                    <th scope="col">RW</th>
                    <th scope="col">Action</th>
    			</tr>
    		</thead>
    		<tbody>
                @foreach($vaksinasi as $value)
                    <tr style="text-align: center;">
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $value->nama }}</td>
                        <td>{{ $value->nik }}</td>
                        <td>{{ $value->tanggal_lahir }}</td>
                        <td>{{ $value->rt }}</td>
                        <td>{{ $value->rw }}</td>
                        <td>
                            <a href="{{ url('/admin/data-vaksinasi/edit/' . $value->id) }}">
                                <i class="fas fa-edit" data-toggle="tooltip" title="Edit"></i>
                            </a>
                            <a href="{{ url('/admin/data-vaksinasi/hapus/' . $value->id) }}" onclick="return confirm('Yakin ingin menghapus Akun?')">
                                <i class="fas fa-trash-alt" data-toggle="tooltip" title="Delete"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
    		</tbody>
    	</table>

    @endsection
    	