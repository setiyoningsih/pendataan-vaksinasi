@extends ('layout.home')

	@section ('content')
        
        <form>
            <center>
                <div class="form-group">
                    <input type="input" class="form-control" name="kata" placeholder="Masukkan Nama Anda..."  style="width: 50%;border-radius: 8px; margin-top: 5%; box-shadow: 5px 5px 8px">
                </div>
            </center>
        </form>

        @if(request()->query('kata'))
            @if($pendataan->isEmpty())
                <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>    
                    <strong>Hasil tidak ditemukan</strong>
                </div>
            @else
                <div class="alert alert-info alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>    
                    <strong>Hasil ditemukan</strong>   
                </div>
                <center>
                    <table class="table table-sm table-warning" style="width: 30%;">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">RT</th>
                                <th scope="col">RW</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pendataan as $value)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $value->nama }}</td>
                                    <td>{{ $value->rt }}</td>
                                    <td>{{ $value->rw }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </center>               
            @endif
        @endif

        <div class="container">
            <div class="row text-center" style="margin-top: 5%;">
                <div class="col">
                    <div class="counter">
                        <!-- <i class="fa fa-plus fa-2x"></i> -->
                        <h2 class="timer count-title count-number" data-to="100" data-speed="1500"></h2>
                        <h3>{{ $anak }}</h3>
                        <p class="count-text ">Jumlah Anak-anak Tervaksinasi</p>
                    </div>
                </div>
                <div class="col">
                   <div class="counter">
                        <!-- <i class="fa fa-not-equal fa-2x"></i> -->
                        <h2 class="timer count-title count-number" data-to="1700" data-speed="1500"></h2>
                        <h3>{{ $remaja }}</h3>
                        <p class="count-text ">Jumlah Remaja Tervaksinasi</p>
                    </div>
                </div>
                <div class="col">
                    <div class="counter">
                        <!-- <i class="fa fa-equals fa-2x"></i> -->
                        <h2 class="timer count-title count-number" data-to="11900" data-speed="1500"></h2>
                        <h3>{{ $dewasa }}</h3>
                        <p class="count-text ">Jumlah Dewasa Tervaksinasi</p>
                    </div>
                </div>
                <div class="col">
                    <div class="counter">
                        <!-- <i class="fa fa-less-than-equal fa-2x"></i> -->
                        <h2 class="timer count-title count-number" data-to="157" data-speed="1500"></h2>
                        <h3>{{ $lansia }}</h3>
                        <p class="count-text ">Jumlah Lansia Tervaksinasi</p>
                    </div>
                </div>
            </div>
        </div>

	@endsection

