<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Al-Hidayah | BAPETEN</title>

    <link href='https://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css">
    <link rel="stylesheet" href={{asset("css/bootstrap.min.css")}}>
    <link rel="stylesheet" href={{asset("css/custom.css")}}>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
<header>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#the-navbar-collapse" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <table>
                    <tr>
                        <th><img src="{{ asset('img/logo_alhidayah.png') }}" class="img-responsive" width="50"> </th>
                        <th><a class="navbar-brand" href="{{route('blog')}}">Masjid Al-Hidayah</a><br> </th>
                    </tr>
                </table>

                {{--<div class="col-xs-3 col-sm-3">
                    <a class="navbar-static-top" href="{{route('blog')}}">
                        <img src="{{ asset('img/logo_alhidayah.png') }}" class="img-responsive" width="140">
                    </a>
                  </div>

                <div class="col-xs-9 col-sm-9">
                    <a class="navbar-static-top" href="{{route('blog')}}"><b>Masjid Al-Hidayah</b></a><br>
                </div>
--}}
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="the-navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{route('blog')}}">Beranda</a></li>
                    <li class="active"><a href="{{url('profil')}}">Profil Masjid</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Galeri
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('gallery')}}">Foto Kegiatan</a></li>
                            <li><a href="{{url('video')}}">Video Ceramah</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Laporan Keuangan
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Mingguan</a></li>
                            <li><a href="#">Bulanan</a></li>
                            <li><a href="#">Tahunan</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>
</header>


<div class="container">
    <div class="row">
        <h1> <b>Struktur Organisasi Masjid </b></h1>
        <br>
        <div class="col-md-8">
            <img src={{ asset('img/Post_Image_3.jpeg') }} class="img-responsive">
            <br>
            <img src={{ asset('img/struktur.jpeg') }} class="img-responsive">
        </div>

        @include('layouts.sidebar')

    </div>
</div>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <p class="copyright">&copy; Bagian Data dan Informasi BAPETEN 2020</p>
            </div>
            <div class="col-md-4">
                <nav>
                    <ul class="social-icons">
                        <li><a href="#" class="i fa fa-facebook"></a></li>
                        <li><a href="#" class="i fa fa-twitter"></a></li>
                        <li><a href="#" class="i fa fa-google-plus"></a></li>
                        <li><a href="#" class="i fa fa-github"></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</footer>
<script src={{asset("js/bootstrap.min.js")}}></script>

</body>
</html>