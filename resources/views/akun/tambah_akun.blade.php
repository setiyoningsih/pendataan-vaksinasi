@extends ('layout.main')

	@section ('content')
		@section ('breadcrumb')
			<h4 class="page-title">Akun</h4>
    		<nav aria-label="breadcrumb">
    			<ol class="breadcrumb"> 
                    <li class="breadcrumb-item"><a href="/admin/akun">Akun</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tambah</li>
    			</ol>
    		</nav>
    	@endsection
        
    	<form method="POST" action="/admin/akun/tambah-akun">
            @csrf
            <div class="form-group">
                <label>Nama</label>
                <input type="input" class="form-control" name="name" required="required">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" required="required">
            </div>
            <center>
                <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
            </center>
        </form>
    @endsection

    
    	