@extends ('layout.main')

	@section ('content')
		@section ('breadcrumb')
			<h4 class="page-title">Data Vaksinasi</h4>
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
                    <input type="input" class="form-control" name="nama" required="required" autofocus value="{{ $vaksinasi->nama }}">
                </div>
                <div class="form-group">
                    <label>NIK</label>
                    <input type="input" class="form-control" name="nik" required="required" autofocus value="{{ $vaksinasi->nik }}">
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="date" id="date" class="form-control" name="tanggal_lahir" required="required" autofocus value="{{ $vaksinasi->tanggal_lahir }}">
                </div>
                <div class="form-group">
                    <label>RT</label>
                    <input type="input" class="form-control" name="rt" required="required" autofocus value="{{ $vaksinasi->rt }}">
                </div>
                <div class="form-group">
                    <label>RW</label>
                    <input type="input" class="form-control" name="rw" required="required" autofocus value="{{ $vaksinasi->rw }}">
                </div>
                <center>
                    <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
                    <a href="/admin/data-vaksinasi" class="btn btn-danger">Cancel</a>
                </center>
        </form>
    @endsection
    	