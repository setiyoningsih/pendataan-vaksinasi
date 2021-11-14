@extends ('layout.home')

	@section ('content')

        <form>
            <center>
                <div class="form-group">
                    <input type="input" class="form-control" name="nama" placeholder="Masukkan Nama Anda..."  style="width: 50%;border-radius: 8px; margin-top: 5%; box-shadow: 5px 5px 8px">
                </div>
            </center>
        </form>

        <div class="container">
            <div class="row text-center" style="margin-top: 5%;">
                <div class="col">
                    <div class="counter">
                        <!-- <i class="fa fa-plus fa-2x"></i> -->
                        <h2 class="timer count-title count-number" data-to="100" data-speed="1500"></h2>
                        <h3>100</h3>
                        <p class="count-text ">Jumlah Anak-anak Tervaksinasi</p>
                    </div>
                </div>
                <div class="col">
                   <div class="counter">
                        <!-- <i class="fa fa-not-equal fa-2x"></i> -->
                        <h2 class="timer count-title count-number" data-to="1700" data-speed="1500"></h2>
                        <h3>100</h3>
                        <p class="count-text ">Jumlah Remaja Tervaksinasi</p>
                    </div>
                </div>
                <div class="col">
                    <div class="counter">
                        <!-- <i class="fa fa-equals fa-2x"></i> -->
                        <h2 class="timer count-title count-number" data-to="11900" data-speed="1500"></h2>
                        <h3>100</h3>
                        <p class="count-text ">Jumlah Dewasa Tervaksinasi</p>
                    </div>
                </div>
                <div class="col">
                    <div class="counter">
                        <!-- <i class="fa fa-less-than-equal fa-2x"></i> -->
                        <h2 class="timer count-title count-number" data-to="157" data-speed="1500"></h2>
                        <h3>100</h3>
                        <p class="count-text ">Jumlah Lansia Tervaksinasi</p>
                    </div>
                </div>
            </div>
        </div>

	@endsection

