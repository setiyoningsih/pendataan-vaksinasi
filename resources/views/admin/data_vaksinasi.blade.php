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
    		<input class="input-file" type="file" id="file" accept="excel/*" name="files[]" multiple="">
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
    				<th scope="col">RT/RW</th>
    			</tr>
    		</thead>
    		<tbody>
    			<tr style="text-align: center;">
    				<th scope="row">1</th>
    				<td>Mark</td>
    				<td>Otto</td>
    				<td>@mdo</td>
    				<td>@mdo</td>
    			</tr>
    		</tbody>
    	</table>

    @endsection
    	