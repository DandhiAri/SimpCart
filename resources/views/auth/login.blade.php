@extends('layout.authlayout')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!-- Google Fonts -->
    @section('head')
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900'
            rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="authtemp/animate.css">
        <!-- Custom Stylesheet -->
        <link rel="stylesheet" href="authtemp/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    @endsection
</head>


<body>
    @section('konten')
        <div class="container">
            <div class="login-box animated fadeInUp">
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session()->has('loginError'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('loginError') }}
                    </div>
                @endif
                <div class="box-header">
                    <h2>Log In</h2>
                </div>
                <form action="/login" method="post">
                    @csrf
                    <label for="name">name</label>
                    <br />
                    <input type="text" id="name" name="name" autofocus required>
                    <br>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <br />
                    <label for="password">Password</label>
                    <br />
                    <input type="password" id="password" name="password" required>
                    <br>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <input type="submit" value="Submit">
                    <br />
                </form>
                {{-- <a href="#"><p class="small">Forgot your password?</p></a> --}}
            </div>
        </div>
    @endsection
</body>
@section('js')
    <script>
        $(document).ready(function() {
            $('#logo').addClass('animated fadeInDown');
            $("input:text:visible:first").focus();
        });
        $('#email').focus(function() {
            $('label[for="email"]').addClass('selected');
        });
        $('#email').blur(function() {
            $('label[for="email"]').removeClass('selected');
        });
        $('#password').focus(function() {
            $('label[for="password"]').addClass('selected');
        });
        $('#password').blur(function() {
            $('label[for="password"]').removeClass('selected');
        });
    </script>
@endsection

</html>
