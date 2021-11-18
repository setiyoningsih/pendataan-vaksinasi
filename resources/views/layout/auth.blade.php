<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <!-- Boostrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!-- Ajax -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<title>
		Login Admin
	</title>
	<style>
		body {
			margin: 0;
			padding: 0;
			background-color:  #FCBA03;
			height: 100vh;
		}
		#login .container #login-row #login-column #login-box {
			margin-top: 180px;
			max-width: 600px;
			height: 360px;
/*			border: 5px solid #faeabe;*/
			background-color: #faeabe;
		}
		#login .container #login-row #login-column #login-box #login-form {
			padding: 20px;
		}
		#login .container #login-row #login-column #login-box #login-form #register-link {
			margin-top: -85px;
		}
	</style>
</head>
<body>
	@if ($errors->any())
        @foreach ($errors->all() as $error)
            <div>
                {{ $error }}
            </div>
        @endforeach
    @endif

	@yield('content')

	<footer style="font-weight: bolder; position: fixed; bottom: 0;">
		<p>&copy;Desa Dadirejo. All Right Reserved. Created by Setiyoningsih</p>
	</footer>


	<!-- Javascript -->
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>
</html>