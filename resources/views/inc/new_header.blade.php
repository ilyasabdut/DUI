<!DOCTYPE html>
<html lang="en">
  <head>

    <style type="text/css">
       .satu {
       font-size: 12px;
       }
       .dua {
       font-size: 20px;
       }
       .tiga {
       font-size: 8px;
       }
    </style>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Informatika Unpad</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="{{URL::to('/')}}/newasset/img/logo-unpad.png"/>

    <!-- CSS
    ================================================== -->
    <!-- Bootstrap css file-->
    <link href="{{URL::to('/')}}/newasset/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome css file-->
    <link href="{{URL::to('/')}}/newasset/css/font-awesome.min.css" rel="stylesheet">
    <!-- Superslide css file-->
    <link rel="stylesheet" href="{{URL::to('/')}}/newasset/css/superslides.css">
    <!-- Slick slider css file -->
    <link href="{{URL::to('/')}}/newasset/css/slick.css" rel="stylesheet">
    <!-- Circle counter cdn css file -->
    <link rel='stylesheet prefetch' href='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/css/jquery.circliful.css'>
    <!-- smooth animate css file -->
    <link rel="stylesheet" href="{{URL::to('/')}}/newasset/css/animate.css">
    <!-- preloader -->
    <link rel="stylesheet" href="{{URL::to('/')}}/newasset/css/queryLoader.css" type="text/css" />
    <!-- gallery slider css -->
    <link type="text/css" media="all" rel="stylesheet" href="{{URL::to('/')}}/newasset/css/jquery.tosrus.all.css" />
    <!-- Default Theme css file -->
    <link id="switcher" href="{{URL::to('/')}}/newasset/css/themes/default-theme.css" rel="stylesheet">
    <!-- Main structure css file -->
    <link href="{{URL::to('/')}}/newasset/style.css" rel="stylesheet">

    <!-- data table-->
    <link href="{{URL::to('/')}}/admasset/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/admasset/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/admasset/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/admasset/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/admasset/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>

    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"></a>
    <!-- END SCROLL TOP BUTTON -->

    <!--=========== BEGIN HEADER SECTION ================-->
    <header id="header">
      <!-- BEGIN MENU -->
      <div class="menu_area">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">  <div class="container">
            <div class="navbar-header">
              <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <!-- LOGO -->
              <!-- TEXT BASED LOGO -->
              <a class="navbar-brand" href="{{url('/')}}">TEKNIK INFORMATIKA</a>
              <!-- IMG BASED LOGO  -->
               <!-- <a class="navbar-brand" href="index.html"><img src="img/logo.png" alt="logo"></a>  -->
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                <li><a href="{{url('/')}}">Beranda</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dosen<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="{{url('/vUser/lecturer')}}">Dosen</a></li>
                    <li><a href="{{url('/vUser/research')}}">Penelitian</a></li>
                    <li><a href="{{url('/vUser/publication')}}">Publikasi</a></li>
                    <li><a href="{{url('/vUser/dedication')}}">Pengabdian</a></li>
                    <li><a href="{{url('/vUser/achievement')}}">Prestasi</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Mahasiswa<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="{{url('/vUser/student')}}">Mahasiswa</a></li>
                    <li><a href="{{url('/vUser/dedicationstd')}}">Pengabdian</a></li>
                    <li><a href="{{url('/vUser/achievementstd')}}">Prestasi</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Akademik<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="{{url('/vUser/kurikulum')}}">Kurikulum</a></li>
                    <li><a href="{{url('/vUser/education')}}">Jadwal Kuliah</a></li>
                    <li><a href="{{url('/vUser/partnership')}}">Kerjasama</a></li>
                  </ul>
                </li>
                <li><a href="{{url('/vUser/alumni')}}">Alumni</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Tentang<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="{{url('/vUser/visi')}}">Visi & Misi</a></li>
                    <li><a href="{{url('/vUser/rencana')}}">Rencana Strategis</a></li>
                    <li><a href="{{url('/vUser/latarbelakang')}}">Latar Belakang</a></li>
                    <li><a href="{{url('/vUser/lulusan')}}">Kompetensi & Prospek Lulusan</a></li>
                    <li><a href="{{url('/vUser/fasilitas')}}">Fasilitas & Sistem Informasi</a></li>
                  </ul>
                </li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </nav>
      </div>
      <!-- END MENU -->
    </header>
    <!--=========== END HEADER SECTION ================-->
