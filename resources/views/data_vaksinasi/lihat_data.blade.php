@extends ('layout.main')

	@section ('content')

		@section ('breadcrumb')
			<h4 class="page-title">Data Vaksinasi</h4>
    		<nav aria-label="breadcrumb">
    			<ol class="breadcrumb">
    				<li class="breadcrumb-item"><a href="/">Tabel</a></li>                    
    				<li class="breadcrumb-item active" aria-current="page">Data Vaksinasi</li>
    			</ol>
    		</nav>
    	@endsection

    	<div class="float-left" style="margin-bottom: 10px;">
    		<input class="input-file" type="file" id="file" accept="excel/*" name="excel">
    	</div>

    	<div class="row" style= "float: right; margin-bottom: 10px;">
    		<a href="" class="btn btn-success"  style="width: 37%; margin-right: 5px; line-height: 25px;">
    			<i class="fas fa-plus"></i>
    			Tambah data
    		</a>
    		<form>
    			<div class="search-box" style="width: 95%;">
    				<input type="text" class="form-control" name="cari" placeholder="Search...">
    			</div>
    		</form>
    	</div>
    	

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
                foreach($vaksinasi as $value)
    			<tr style="text-align: center;">
    				<th scope="row">{{ loop->iteration }}</th>
    				<td>{{ $value->nama }}</td>
    				<td>{{ $value->nik }}</td>
    				<td>{{ $value->tanggal_lahir }}</td>
    				<td>{{ $value->rt }}</td>
                    <td>{{ $value->rw }}</td>
                    <td>
                        <a href="{{ url('/admin/akun/edit-akun/' . $value->id) }}">
                            <i class="fas fa-edit" data-toggle="tooltip" title="Edit"></i>
                        </a>
                        <a href="{{ url('/admin/akun/hapus-akun/' . $value->id) }}" onclick="return confirm('Yakin ingin menghapus Akun?')">
                            <i class="fas fa-trash-alt" data-toggle="tooltip" title="Delete"></i>
                        </a>
                    </td>
    			</tr>
    		</tbody>
    	</table>

    @endsection
    	