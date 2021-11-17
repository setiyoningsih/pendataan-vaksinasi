@extends ('layout.main')

	@section ('content')
		@section ('breadcrumb')
			<h4 class="page-title">Akun</h4>
    		<nav aria-label="breadcrumb">
    			<ol class="breadcrumb"> 
                    <li class="breadcrumb-item"><a href="/admin/akun">Akun</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Profil</li>
    			</ol>
    		</nav>
    	@endsection

        <table class="table table-warning table-bordered">
            <tbody>
                <tr>
                    <th scope="row">Nama</th>
                    <td>{{ $user->name }}</td>
                </tr>
                <tr>
                    <th scope="row">Email</th>
                    <td>{{ $user->email }}</td>
                </tr>
                <tr>
                    <th scope="row">Password</th>
                    <td>{{ $user->password }}</td>
                </tr>
            </tbody>
        </table>

    @endsection
    	