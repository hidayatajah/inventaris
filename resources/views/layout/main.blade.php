<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=fedge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Custom fonts for this template-->
    <link href="{{ asset('lte/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('lte/css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<style>
    .container {
        max-width: 900px;
        margin-top: 150px;
    }

    .red-border {
        border: 1px solid red;
    }

    .header{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    padding: 35px 12%;
    background: rgba(0, 0, 0, 0.8);
    backdrop-filter: blur(10px);
    display:flex ;
    justify-content: space-between;
    align-items: center;
    z-index: 100;
}
.logo{
    font-size: 25px;
    color: white;
    font-weight: 600;
    transition: 0.3s ease;
}
.logo:hover{
    color: orangered;
    text-shadow: 0 0 25px orangered, 0 0 50px orangered;
    transform: scale(1.1);
}
span{
    color: orangered;
}
.navbar a{
    font-size: 18px;
    color: white;
    font-weight: 500;
    margin: 0 20px;
    border-bottom: 3px  solid transparent;
    transition: 0.3s ease;
}
.navbar a:hover, .navbar a.active{
    color: orangered;
    border-bottom: 3px solid orangered;
}
.contact{
    padding: 10px 20px;
    background-color: white;
    color: black;
    border: 2px solid transparent;
    border-radius: 8px;
    font-size: 16px;
    letter-spacing: 1px;
    font-weight: 600;
    transition: 0.3s ease;
}
.contact:hover{
    background-color: orangered;
    box-shadow: 0 0 25px orangered;
    color: white;
}
</style>

<body>
    <!-- Navbar Start -->
    <header class="header">
        <a href="#" class="logo">Fik<span>ri</span></a>

        <nav class="navbar">
            <a href="{{ route('admin.index') }}" class="active">Tabel Data</a>
            <a href="{{ route('admin.user.create') }}">Tambah Data</a>
        </nav>
        <a href="{{ route('logout') }}" class="contact">Logout</a>
    </header>    <!-- Navbar End -->
    @yield('content')

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('lte/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('lte/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('lte/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('lte/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('lte/vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('lte/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('lte/js/demo/chart-pie-demo.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>


</body>

</html>
