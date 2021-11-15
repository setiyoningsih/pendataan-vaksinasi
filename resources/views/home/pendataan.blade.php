@extends ('layout.home')

	@section ('content')
		@if ($message = Session::get('pesan'))
			<div class="alert alert-success alert-block">
				<button type="button" class="close" data-dismiss="alert">×</button>    
				<strong>{{ $message }}</strong>
			</div>
   		@endif
		<center>
			<div class="container-blur">
				<form style="width: 50%;" method="POST" enctype="multipart/form-data">
					@csrf
						<div class="form-group">
							<label>Nama</label>
							<input type="input" class="form-control" name="nama" required="required">
						</div>
						<div class="form-group">
							<label>NIK</label>
							<input type="input" class="form-control" name="nik" required="required">
						</div>
						<div class="form-group">
							<label>Tanggal lahir</label>
							<input type="date" id="date" class="form-control" name="tanggal_lahir" required="required">
						</div>
						<div class="row">
							<div class="col">
								<label>RT</label>
								<input type="text" class="form-control" name="rt" required="required">
							</div>
							<div class="col">
								<label>RW</label>
								<input type="text" class="form-control" name="rw" required="required">
							</div>
						</div>
						<div style="margin-top: 30px; margin-bottom: 20px;">
							<input class="input-file" type="file" id="file" accept="image/*" name="sertifikat">
							<div class="text-danger">*Sertifikat vaksinasi</div>
						</div>
						<center>
							<button type="submit" class="btn btn-primary" name="submit" value="terekam">Submit</button>
						</center>
				</form>
			</div>
		</center>

	@endsection