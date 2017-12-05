<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Informatika Unpad</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('assets/one/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{URL::to('/')}}/assets/one/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="{{URL::to('/')}}/assets/one/css/agency.css" rel="stylesheet">
<link href="{{URL::to('/')}}/assets/one/css/services.css" rel="stylesheet">



  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Informatika Unpad</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <!--<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{'/vUser/news'}}">News</a>
            </li>-->
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{'/'}}">Beranda</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownResearch" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dosen
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownResearch">
                <a class="dropdown-item" href="{{url('/vUser/lecturer')}}">Dosen</a>
                <a class="dropdown-item" href="{{url('/vUser/research')}}">Penelitian</a>
                <a class="dropdown-item" href="{{url('/vUser/publication')}}">Publikasi</a>
                <a class="dropdown-item" href="{{url('/vUser/dedication')}}">Pengabdian</a>
                <a class="dropdown-item" href="{{url('/vUser/achievement')}}">Prestasi</a>

              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownResearch" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Mahasiswa
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownResearch">
                <a class="dropdown-item" href="{{url('/vUser/student')}}">Mahasiswa</a>
                <a class="dropdown-item" href="{{url('/vUser/dedicationstd')}}">Pengabdian</a>
                <a class="dropdown-item" href="{{url('/vUser/achievementstd')}}">Prestasi</a>
              </div>
              <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownResearch" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Pendidikan
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownResearch">
                <a class="dropdown-item" href="{{url('/vUser/student')}}">Kurikulum</a>
                <a class="dropdown-item" href="{{url('/vUser/alumni')}}">Jadwal Kuliah</a>
                <a class="dropdown-item" href="{{'/vUser/partnership'}}">Kerjasama</a>
              </div>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{'/vUser/alumni'}}">Alumni</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownResearch" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Tentang
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownResearch">
                <a class="dropdown-item" href="{{url('/vUser/lecturer')}}">Visi</a>
                <a class="dropdown-item" href="{{url('/vUser/research')}}">Misi</a>
                <a class="dropdown-item" href="{{url('/vUser/publication')}}">Rencana Strategis</a>
                <a class="dropdown-item" href="{{url('/vUser/dedication')}}">Latar Belakang</a>
                <a class="dropdown-item" href="{{url('/vUser/achievement')}}">Kompetensi & Prospek Lulusan</a>
              </div>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownQuickLinks" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Tautan
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownQuickLinks">
                <a class="dropdown-item" href='http://cs-learning.net/' target = '_blank'>E-Learning</a>
                <a class="dropdown-item" href='http://himatif.fmipa.unpad.ac.id/'target = '_blank'>Himatif</a>
                <a class="dropdown-item" href='https://siat.unpad.ac.id/index.php/login'target = '_blank'>SIAT</a>
                <a class="dropdown-item" href='https://e5.onthehub.com/WebStore/ProductsByMajorVersionList.aspx?ws=ef1ad7d6-869b-e011-969d-0030487d8897'target = '_blank'>Microsoft Imagine</a>
                <a class="dropdown-item" href="blog-post.html">Akreditasi Dosen</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>