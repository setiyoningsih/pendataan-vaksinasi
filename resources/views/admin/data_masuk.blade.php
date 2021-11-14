@extends ('layout.main')

	@section ('content')

		@section ('breadcrumb')
			<h4 class="page-title">Data Masuk</h4>
    		<nav aria-label="breadcrumb">
    			<ol class="breadcrumb">
    				<li class="breadcrumb-item"><a href="/">Tabel</a></li>                    
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
    			<tr style="text-align: center;">
    				<th scope="row">1</th>
    				<td>Mark</td>
    				<td>Otto</td>
    				<td>@mdo</td>
    				<td>@mdo</td>
                    <td>@mdo</td>
    				<td>
                        <a href="" data-toggle="modal">
                            <i class="fas fa-check-circle fa-2x" data-toggle="tooltip" title="Terima"></i>
                        </a>
                        <a href="" data-toggle="modal">
                            <i class="fas fa-times-circle fa-2x" data-toggle="tooltip" title="Tolak"></i>
                        </a>            
                    </td>
    			</tr>
    		</tbody>
    	</table>    	

    @endsection