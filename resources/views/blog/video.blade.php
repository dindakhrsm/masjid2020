<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="content-type" content="text/html" />
    <meta name="author" content="lolkittens" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Al-Hidayah | BAPETEN</title>

    <!-- CSS Bootstrap -->
    <link href={{url("css/bootstrap.css")}} rel="stylesheet"/>
    <link href={{url("css/style.css")}} rel="stylesheet"/>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>

    <!-- CSS bawaan -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css">
    <link rel="stylesheet" href={{asset("css/bootstrap.min.css")}}>
    <link rel="stylesheet" href={{asset("css/custom.css")}}>

    <!-- CSS Lightbox -->
    <link href={{url("css/lightbox.css")}} rel="stylesheet"/>

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
                        <th> <img src="{{ asset('img/logo_alhidayah.png') }}" class="img-responsive" width="50"> </th>
                        <th> <a class="navbar-brand" href="{{route('blog')}}">Masjid Al-Hidayah</a><br> </th>
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
                    <li><a href="{{url('profil')}}">Profil Masjid</a></li>
                    <li class ="active" class="dropdown">
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
    <div class="row mtb-60">
        <div class="heading">
            <h1 style="text-align: center"> Video Ceramah </h1>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4">
                <div class="well">
                    <a class="example-image-link" href="#" data-lightbox="example-set" data-title="Caption Images">
                        <iframe class="thumbnail img-responsive"  src="https://www.youtube.com/embed/S6hG9W6ZY6s" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="well">
                    <a class="example-image-link" href="#" data-lightbox="example-set" data-title="Caption Images">
                        <iframe class="thumbnail img-responsive"  src="https://www.youtube.com/embed/YKl3OQBpO7w" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="well">
                    <iframe class="thumbnail img-responsive"  src="https://www.youtube.com/embed/QVGMZMbYeHI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></a>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-4">
                <div class="well">
                    <a class="example-image-link" href="#" data-lightbox="example-set" data-title="Caption Images">
                        <iframe class="thumbnail img-responsive"  src="https://www.youtube.com/embed/uM9FdH5zlHo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="well">
                    <a class="example-image-link" href="#" data-lightbox="example-set" data-title="Caption Images">
                        <iframe class="thumbnail img-responsive"  src="https://www.youtube.com/embed/kP8w6SNJ1Ws" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="well">
                    <a class="example-image-link" href="#" data-lightbox="example-set" data-title="Caption Images">
                    <iframe class="thumbnail img-responsive"  src="https://www.youtube.com/embed/r_dItIKV_So" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="well">
                    <a class="example-image-link" href="#" data-lightbox="example-set" data-title="Caption Images">
                        <iframe class="thumbnail img-responsive"  src="https://www.youtube.com/embed/wTRZnNDe_3w" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="well">
                    <a class="example-image-link" href="#" data-lightbox="example-set" data-title="Caption Images">
                        <iframe class="thumbnail img-responsive"  src="https://www.youtube.com/embed/tUDX9QpKTiY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="well">
                    <iframe class="thumbnail img-responsive"  src="https://www.youtube.com/embed/aAyoFy_BZyw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></a>
                </div>
            </div>
        </div>

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

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src={{url("js/bootstrap.js")}}></script>

<!-- jQuery Lightbox -->
<script src={{url("js/lightbox-plus-jquery.min.js")}}></script>
<script src={{asset("js/bootstrap.min.js")}}></script>
</body>
</html>