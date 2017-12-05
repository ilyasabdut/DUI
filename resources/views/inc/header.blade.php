<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{URL::to('/')}}/Asset/css/bootstrap.css" rel="stylesheet">


    <!-- MetisMenu CSS -->
    <link href="{{URL::to('/')}}/assets/vendor/metisMenu/metisMenu.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{URL::to('/')}}/assets/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{URL::to('/')}}/assets/vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{URL::to('/')}}/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{'/admin'}}">Dashboard Admin</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">

         <li><a href="{{'/'}}"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>

            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="{{'/admin'}}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                         <li>
                            <a href="{{'/admin/vNews/table'}}"><i class="fa fa-table fa-fw"></i> News Tables</a>
                        </li>
                         <li>
                            <a href="{{'/admin/vPartnership/table'}}"><i class="fa fa-table fa-fw"></i> Partnership Tables</a>
                        </li>
                        <li>
                            <a href="{{'/admin/vEducation/table'}}"><i class="fa fa-table fa-fw"></i> Education Tables</a>
                        </li>
                        <li>
                             <a href="{{'/admin/vAlumni/table'}}"><i class="fa fa-table fa-fw"></i> Alumni Tables</a>
                      </li>
                        <li>
                            <a href="#"><i class="fa fa-table fa-fw"></i>Lecturer Tables<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">

                                <li>
                                 <a href="{{'/admin/vDosen/table'}}">Lecturers Tables</a>
                                </li>
                                <li>
                                 <a href="{{'/admin/vPublicationDosen/table'}}">Lecturers Publication Tables</a>
                                </li>
                                <li>
                                    <a href="{{'/admin/vResearchDosen/table'}}">Lecturers Research Tables</a>
                                </li>
                                <li>
                                    <a href="{{'/admin/vDedicationDosen/table'}}">Lecturers Social Engagement Tables</a>
                                </li>
                                <li>
                                    <a href="{{'/admin/vAchievementDosen/table'}}">Lecturers Achievement Tables</a>
                                </li>
                            </ul>
                        </li>
                         <li>
                            <a href="#"><i class="fa fa-table fa-fw"></i>Students Tables<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                 <a href="{{'/admin/vMahasiswa/table'}}">Student Tables</a>
                                </li>
                                <li>
                                    <a href="{{'/admin/vPublicationMhs/table'}}">Student Publication Tables</a>
                                </li>
                                <li>
                                 <a href="{{'/admin/vResearchMhs/table'}}">Student Research Tables</a>
                                </li>
                                 <li>
                                    <a href="{{'/admin/vDedicationMhs/table'}}">Student Social Engagement Tables</a>
                                </li>
                                <li>
                                    <a href="{{'/admin/vAchievementMhs/table'}}">Student Achievement Tables</a>
                                </li>

                            </ul>
                        </li>

                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
