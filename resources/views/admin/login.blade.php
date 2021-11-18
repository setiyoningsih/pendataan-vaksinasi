@extends('layout.auth')

    @section('content')
        <div id="login">
            <div class="container">
                <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-6">
                        <div id="login-box" class="col-md-12">
                            <form id="login-form" class="form" action="" method="post">
                                <center>
                                    <img src="/images/logo-pati.png" alt="Logo" style="height: 110px; margin-bottom: 10px; ">
                                    @if(\Session::has('alert'))
                                        <div class="alert-success">
                                            <div>{{Session::get('alert')}}</div>
                                        </div>
                                    @endif
                                    @csrf             
                                    <div class="form-group">
                                        <label for="name">Nama</label><br>
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label><br>
                                        <input type="password" name="password" id="password" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" name="submit" class="btn btn-warning btn-md" value="Submit">
                                            Submit
                                        </button> 
                                    </div>
                                </center>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection