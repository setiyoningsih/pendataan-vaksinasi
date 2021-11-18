@extends ('layout.main')

	@section ('content')
		@section ('breadcrumb')
			<h4 class="page-title">Data Vaksinasi</h4>
    		<nav aria-label="breadcrumb">
    			<ol class="breadcrumb"> 
                    <li class="breadcrumb-item"><a href="/admin/data-vaksinasi">Data Vaksinasi</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tambah</li>
    			</ol>
    		</nav>
    	@endsection
        
    	<form method="POST" action="/admin/data-vaksinasi/tambah" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="input" class="form-control" name="nama" required="required">
                </div>
                <div class="form-group">
                    <label for="nik">NIK</label>
                    <input type="input" class="form-control" name="nik" required="required">
                    @error('nik')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" id="date" class="form-control" name="tanggal_lahir" required="required">
                </div>
                <div class="form-group">
                    <label for="rt">RT</label>
                    <input type="input" class="form-control" name="rt" required="required">
                </div>
                <div class="form-group">
                    <label for="rw">RW</label>
                    <input type="input" class="form-control" name="rw" required="required">
                </div>
                <center>
                    <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
                </center>
        </form>
    @endsection

    
    	