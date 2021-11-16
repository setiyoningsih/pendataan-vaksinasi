@extends('layout.main')

	@section('content')
    	@section('breadcrumb')
    		<h4 class="page-title">Dashboard</h4>
    		<nav aria-label="breadcrumb">
    			<ol class="breadcrumb">
    				<li class="breadcrumb-item"><a href="/">Home</a></li>                    
    				<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
    			</ol>
    		</nav>
    	@endsection

    	<div class="container-fluid" style="width: 130%; padding-left: 120px;">
    		<div class="row">
    			<!-- column -->
    			<div class="col-sm-12 col-lg-4">
    				<div class="card card-hover" style="background-color: red;">
    					<div class="card-body" style="padding: 50px;">
    						<div class="d-flex">
    							<div class="mr-4">
    								<h4 class="mb-0">000</h4>
    								<p style="color: white;">Jumlah Anak-anak Tervaksinasi</p>
    							</div>
    							<div class="chart ml-auto" style="width: 25%;">
    								<img src="/images/vaksin.jpg" alt="Corona Vaksin" />
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<!-- column -->
    			<div class="col-sm-12 col-lg-4">
    				<div class="card card-hover" style="background-color: #FCBA03;">
    					<div class="card-body" style="padding: 50px;">
    						<div class="d-flex">
    							<div class="mr-4">
    								<h4 class="mb-0">000</h4>
    								<p style="color: white;">Jumlah Remaja Tervaksinasi</p>
    							</div>
    							<div class="chart ml-auto" style="width: 25%;">
    								<img src="/images/not-vaksin.jpg" alt="Belum Corona Vaksin" />
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>

            <div class="row">
                <!-- column -->
                <div class="col-sm-12 col-lg-4">
                    <div class="card card-hover" style="background-color: green;">
                        <div class="card-body" style="padding: 50px;">
                            <div class="d-flex">
                                <div class="mr-4">
                                    <h4 class="mb-0">000</h4>
                                    <p style="color: white;">Jumlah Dewasa Tervaksinasi</p>
                                </div>
                                <div class="chart ml-auto" style="width: 25%;">
                                    <img src="/images/vaksin.jpg" alt="Corona Vaksin" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- column -->
                <div class="col-sm-12 col-lg-4">
                    <div class="card card-hover" style="background-color: purple;">
                        <div class="card-body" style="padding: 50px;">
                            <div class="d-flex">
                                <div class="mr-4">
                                    <h4 class="mb-0">000</h4>
                                    <p style="color: white;">Jumlah Lansia Tervaksinasi</p>
                                </div>
                                <div class="chart ml-auto" style="width: 25%;">
                                    <img src="/images/not-vaksin.jpg" alt="Belum Corona Vaksin" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            <div class="table-responsive-sm">
                <table class="table table-bordered">
                    <thead class="bg-warning">
                        <tr style="text-align: center;">
                            <th scope="col">No</th>
                            <th scope="col">RT</th>
                            <th scope="col">RW</th>
                            <th scope="col">Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $value    )
                            <tr style="text-align: center;">
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $loop->rt }}</td>
                                <td>{{ $loop->rw }}</td>
                                <td></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    	

	@endsection
    




