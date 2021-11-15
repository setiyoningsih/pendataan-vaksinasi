@extends ('layout.main')

	@section ('content')
		@section ('breadcrumb')
			<h4 class="page-title">Akun</h4>
    		<nav aria-label="breadcrumb">
    			<ol class="breadcrumb"> 
                    <li class="breadcrumb-item"><a href="/admin/data-vaksinasi">Data Vaksinasi</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
    			</ol>
    		</nav>
    	@endsection
        
    	<form method="POST" action="" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <label>Nama</label>
                    <input type="input" class="form-control" name="nama" required="required" autofocus="{{ $vaksinasi->nama }}">
                </div>
                <div class="form-group">
                    <label>NIK</label>
                    <input type="input" class="form-control" name="nik" required="required" autofocus="{{ $vaksinasi->nik }}">
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="date" id="date" class="form-control" name="tanggal_lahir" required="required" autofocus="{{ $vaksinasi->tanggal_lahir }}">
                </div>
                <div class="form-group">
                    <label>RT</label>
                    <input type="input" class="form-control" name="rt" required="required" autofocus="{{ $vaksinasi->rt }}">
                </div>
                <div class="form-group">
                    <label>RW</label>
                    <input type="input" class="form-control" name="rw" required="required" autofocus="{{ $vaksinasi->rw }}">
                </div>
                <center>
                    <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
                    <a href="/admin/akun" class="btn btn-danger">Cancel</a>
                </center>
        </form>
    @endsection
    	