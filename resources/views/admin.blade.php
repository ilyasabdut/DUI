@include('inc.header1')
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    @if(session('info'))
              <div class="alert alert-success">
                    {{session('info')}}
              </div>
             @endif
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-th fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><span>{{ count(DB::table('News')->get())}}</span></div>
                                    <div>NEWS</div>
                                </div>
                            </div>
                        </div>
                        <a href="/admin/vNews/table">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-briefcase fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><span>{{ count(DB::table('partnership')->get())}}</span></div>
                                    <div>PARTNERSHIP</div>
                                </div>
                            </div>
                        </div>
                        <a href="/admin/vPartnership/table">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-book fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><span>{{ count(DB::table('Education')->get())}}</span></div>
                                    <div>Education</div>
                                </div>
                            </div>
                        </div>
                        <a href="/admin/vEducation/table">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="glyphicon glyphicon-cloud-upload" style="font-size:75px"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><span>{{ count(DB::table('PublicationDosen')->get())}}</span></div>
                                    <div>Lecturers Publication</div>
                                </div>
                            </div>
                        </div>
                        <a href="/admin/vPublicationDosen/table">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-star fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><span>{{ count(DB::table('AchievementDosen')->get())}}</span></div>
                                    <div>Lecturers Achievement</div>
                                </div>
                            </div>
                        </div>
                        <a href="/admin/vAchievementDosen/table">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-search fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><span><span>{{ count(DB::table('ResearchDosen')->get())}}</span></div>
                                    <div>Lecturers Research</div>
                                </div>
                            </div>
                        </div>
                        <a href="/admin/vResearchDosen/table">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tags fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><span>{{ count(DB::table('DedicationDosen')->get())}}</span></div>
                                    <div>Lecturers Social Engagement</div>
                                </div>
                            </div>
                        </div>
                        <a href="/admin/vDedicationDosen/table">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

            <div class="col-lg-4 col-md-6">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-star fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><span>{{ count(DB::table('AchievementMhs')->get())}}</span></div>
                                    <div>Student Achievement</div>
                                </div>
                            </div>
                        </div>
                        <a href="/admin/vAchievementMhs/table">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            <div class="col-lg-4 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tags fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><span>{{ count(DB::table('DedicationMhs')->get())}}</span></div>
                                    <div>Student Social Engagement</div>
                                </div>
                            </div>
                        </div>
                        <a href="/admin/vDedicationMhs/table">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            <div class="col-lg-4 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-search fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><span>{{ count(DB::table('ResearchMhs')->get())}}</span></div>
                                    <div>Student Research</div>
                                </div>
                            </div>
                        </div>
                        <a href="/admin/vResearchMhs/table">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            <div class="col-lg-4 col-md-6">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="glyphicon glyphicon-cloud-upload" style="font-size:75px"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><span>{{ count(DB::table('PublicationMhs')->get())}}</span></div>
                                    <div>Student Publication</div>
                                </div>
                            </div>
                        </div>
                        <a href="/admin/vPublicationMhs/table">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

            <div class="col-lg-4 col-md-6">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-users fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><span>{{ count(DB::table('Mahasiswa')->get())}}</span></div>
                                    <div>Student</div>
                                </div>
                            </div>
                        </div>
                        <a href="/admin/vMahasiswa/table">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            <div class="col-lg-4 col-md-6">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-users fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><span>{{ count(DB::table('Dosen')->get())}}</span></div>
                                    <div>Lecturers</div>
                                </div>
                            </div>
                        </div>
                        <a href="/admin/vDosen/table">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="glyphicon glyphicon-education" style="font-size:75px"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"> <span>{{ count(DB::table('Alumni')->get())}} </span>     </div>
                                    <div>Alumni</div>
                                </div>
                            </div>
                        </div>
                        <a href="/admin/vAlumni/table">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
        <!-- //admin/v/tablepage-wrapper -->

    </div>
@include('inc.footer1')
