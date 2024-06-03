<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('lte/fontawesome-free/css/all.min.css') }}">
        <!-- icheck bootstrap -->
        <link rel="stylesheet" href="{{ asset('lte/icheck-bootstrap/icheck-bootstrap.min.css') }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('lte/css/adminlte.min.css') }}">
    </head>
    <style>
        body{
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    font-family: 'Jost' sans-serif;
    background: linear-gradient(to bottom, #0f0c29, #302b63,#24243e);
}
.main{
    width: 350px;
    height: 500px;
    background: red;
    overflow: hidden;
    background: url({{ asset('img/mataair.jpg') }}) no-repeat center / cover;
    border-radius: 10px;
    box-shadow: 5px 20px 50px #0000;
}
#chk{
    display: none;
}
.signup{
    position: relative;
    width: 100%;
    height: 100%;
}
label{
    color: #fff;
    font-size: 2.3em;
    justify-content: center;
    display: flex;
    margin: 60px;
    font-weight: bold;
    cursor: pointer;
    transition: .5s ease-in-out;
}
input{
    width: 60%;
    height: 20px;
    background: #e0dede;
    justify-content: center;
    display: flex;
    margin: 20px auto;
    padding: 10px;
    border: none;
    outline: none;
    border-radius: 5px;
}
button{
    width: 60%;
    height: 40px;
    margin: 10px auto;
    justify-content: center;
    display: block;
    color: #fff;
    background: #0f0c29;
    font-size: 1em;
    font-weight: bold;
    margin-top: 20px;
    outline: none;
    border: none;
    border-radius: 5px;
    transition: .2s ease-in;
    cursor: pointer;
}
button:hover{
    background: #1900ff;
}
.login{
    height: 460px;
    background: #eee;
    border-radius: 60% / 10%;
    transform: translateY(-180px);
    transition: .8s ease-in-out;
}
.login label{
    color: #302b63;
    transform: scale(.6);
}
#chk:checked ~ .login{
    transform: translateY(-500px);
}
#chk:checked ~ .login label{
    transform: scale(1);
}
#chk:checked ~ .signup label{
    transform: scale(.6);
}
    </style>
    
    <body class="hold-transition login-page">
        
        {{-- log --}}
        <div class="main">
            <input type="checkbox" id="chk" aria-hidden="true">
        
                <div class="signup">
                    <form action="{{ route('register-proses') }}" method="POST">
                        @csrf
                        <label for="chk" aria-hidden="true">Sign up</label>
                        <input type="text" name="ussername" placeholder="User name" required="">
                        <input type="email" name="email" placeholder="Email" required="">
                        <input type="Password" name="password" placeholder="Password" required="">
                        <button>Sign up</button>
                    </form>
                </div>
                <div class="login">
                    <form action="{{ route('login-proses') }}" method="POST">
                        @csrf
                        <label for="chk" aria-hidden="true">Login</label>
                        <input type="text" name="ussername" placeholder="Ussername" required="">
                        @error('ussername')
                            <small>{{ $message }}</small>
                        @enderror
                        <input type="Password" name="password" placeholder="Password" required="">
                        @error('ussername')
                        <small>{{ $message }}</small>
                    @enderror
                        <button>Login</button>
                    </form>
                </div>
            </div>
        <!-- jQuery -->
        <script src="{{ asset('lte/plugins/jquery/jquery.min.js') }}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{ asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('lte/dist/js/adminlte.min.js') }}"></script>
        @if ($message = Session::get('failed'))
        <!-- Modal -->
        <div class="modal fade" id="alertModal" tabindex="-1" role="dialog" aria-labelledby="alertModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="alertModalLabel">Peringatan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{ $message }}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    <!-- You can add additional buttons here if needed -->
                </div>
            </div>
        </div>
    </div>
        <div class="main">
    <input type="checkbox" id="chk" aria-hidden="true">


    <!-- Bootstrap JS (optional, if you want to use JavaScript features like modals) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Script to show the modal automatically when the page loads -->
    <script>
        $(document).ready(function() {
            $('#alertModal').modal('show');
        });
    </script>
@endif
    @if ($message = Session::get('succes'))
    <!-- Modal -->
    <div class="modal fade" id="alertModal" tabindex="-1" role="dialog" aria-labelledby="alertModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="alertModalLabel">Pemberitahuan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{ $message }}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    <!-- You can add additional buttons here if needed -->
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (optional, if you want to use JavaScript features like modals) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Script to show the modal automatically when the page loads -->
    <script>
        $(document).ready(function() {
            $('#alertModal').modal('show');
        });
    </script>
@endif
</body>

</html>
