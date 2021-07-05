<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Detail Mahasiswa - ITB STIKOM BALI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/iconbar.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" type="text/css" href="/css/material-icons.css">
    <script type="text/javascript" src="/js/bootstrap.js"></script>
    <script type="text/javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/adminlte.js"></script>
    <script type="text/javascript" src="/js/adminlte.min.js"></script>
</head>
<body>
<style>
   body
    {
        max-width:100%;
    }
/*Navbar Header Brand*/
    h2
    {
        position:fixed;
        margin-left:15pt;
    }

    .text-left
    {
        margin-left:45pt;
    }

/*Sidebar*/
    .sidebar
    {
        position:fixed;
        top:0;
        bottom:0;
        left:0;
        z-index:100;/*Behind The Navbar*/
        padding:0;
        box-shadow:inset -1px 0 0 rgba(0, 0, 0, -1);
    }

    .sidebar-sticky
    {
        position: -webkit-sticky;
        position:sticky;
        top: 48px; /*Height Of Navbar*/
        height:calc(100vh - 48px);
        padding-top: .5rem;
        overflow-x:hidden;
        overflow-y:auto;/*Scrollable contents if viewport is shorter than content*/
    }

    .sidebar .nav-link
    {
        font-weight:500;
        color:#333;
    }

    .sidebar .nav-link.active
    {
        color:#007bff;
    }

    .nav-treeview
    {
        display:block;
        list-style:none;
        padding:0;
        background:transparent;
    }

    .menu-open
    {
        display:block;
    }

    /*navigation link for cursor*/
    .nav__link
    {
        display:flex;
    }
    .nav__link:hover
    {
        background-color: snow;
    }

    /*navigation link for cursor*/
    .nav__link:hover
    {
        background-color: snow;
    }

</style>
<!--Navbar Header-->
<nav class="navbar navbar-expanded-sm bg-primary fixed-top">
        <div class="container">
        <a href="/tampilkanmahasiswa" data-target="nav-mobile" class="sidenav-trigger show-on-large">
            <div class="nav-wrapper">
                <i class="material-icons left nav__link" style="color:white;margin-top:6pt;">arrow_back</i>
            </div>
        </a>
            <h2 class="text-left font-weight-bold"><font style="font-size:12pt;color:white;font-family:sans-serif;left:5px;">
               Detail Mahasiswa
            </font></h1>
        </div>
    </nav>

<!--Content (Isi)-->
<br><br>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom container">
        <h1><font style="font-family:verdana;font-size:20pt;color:black;">Mahasiswa</font></h1>
    </div>

    <div class="container">
    <div class="table-responsive">
        <div class="card" style="max-width: 540px;">
            <input type="hidden" name="id" id="id" value="{{$mahasiswa->id}}">
                <div class="col-md-4">
			        <img src="{{asset('uploads/mahasiswa/'. $mahasiswa->image)}}" width="100%" height="100%" alt="image">
                </div>
			<div class="card-body">
				<h5>{{$mahasiswa->nama_lengkap}}</h5>
                <p>NIM : {{$mahasiswa->nim}}</p>
				<p>Angkatan : {{$mahasiswa->angkatan}}</p>
                <p>Status : {{$mahasiswa->status_mahasiswa}}</p>
				<p>Jenis Kelamin : {{$mahasiswa->jenis_kelamin}}</p>
                <p>Tempat Tanggal Lahir : {{$mahasiswa->tempat_lahir}} , {{$mahasiswa->tanggal_lahir}}</p>
                <p>Alamat : {{$mahasiswa->alamat}}</p>
                <p>No.Telepon : {{$mahasiswa->no_telepon}}</p>
                <p>No.Handphone : {{$mahasiswa->no_handphone}}</p>
                <p>Facebook : {{$mahasiswa->facebook}}</p>
                <p>Twitter : {{$mahasiswa->twitter}}</p>
                <p>Email : {{$mahasiswa->email}}</p>
			</div>
		</div>
        </div>
    </div>
</body>
</html>