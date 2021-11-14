@extends ('layout.main')

	@section ('content')
		@section ('breadcrumb')
			<h4 class="page-title">Akun</h4>
    		<nav aria-label="breadcrumb">
    			<ol class="breadcrumb"> 
                    <li class="breadcrumb-item"><a href="/">Akun</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
    			</ol>
    		</nav>
    	@endsection
        
    	<form>
            <div class="form-group">
                <label>Nama</label>
                <input type="input" class="form-control" name="nama">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <center>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="" class="btn btn-danger">Cancel</a>
            </center>
        </form>
    @endsection
    	