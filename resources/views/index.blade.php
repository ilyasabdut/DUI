@include('inc.new_header')
<!--=========== BEGIN SLIDER SECTION ================-->
    <section id="slider">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="slider_area">
            <!-- Start super slider -->
            <div id="slides">
              <ul class="slides-container">

                @if(count($data)>0)
                @foreach  ($data as $dat)
                <li>
                  <img src="{{ asset('image/berita/'.$dat->gambar)}}" alt="img">
                   <div class="slider_caption">
                    <h2>{{$dat->Judul}}</h2>
                    <p><?php
                    $artikel = $dat->Isi;
                    $tag_artikel = strip_tags($artikel);
                    $sub_artikel = substr($tag_artikel,0,250)." . . .";
                    echo $sub_artikel;
                    ?></p>
                    <a class="slider_btn" href='{{url("/vUser/showNews/{$dat->ID}")}}'>Know More</a>
                  </div>
                  </li>
                  @endforeach
                  @endif
              </ul>
              <nav class="slides-navigation">
                <a href="#" class="next"></a>
                <a href="#" class="prev"></a>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=========== END SLIDER SECTION ================-->

    <!--=========== BEGIN ABOUT US SECTION ================-->
    <section id="aboutUs">
      <div class="container">
        <div class="row">
        <!-- Start about us area -->
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="aboutus_area wow fadeInLeft">
            <h2 class="titile">Tentang Prodi</h2>
            <p class="dua" align="justify">Program Sarjana Program Studi Teknik Informatika merupakan pengembangan dari Bidang Minat Ilmu Komputer di Jurusan Matematika FMIPA Universitas Padjadjaran, sesuai dengan rencana strategis jurusan, fakultas, dan universitas. Kurikulum Bidang Minat Ilmu Komputer diberlakukan
              tahun 2004 dan telah menghasilkan lulusan yang terserap di berbagai institusi baik negeri maupun swasta tersebar di Indonesia.</p>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="newsfeed_area wow fadeInRight">
            <ul class="nav nav-tabs feed_tabs" id="myTab2">
              <li class="active"><a href="#news" data-toggle="tab">News</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              <!-- Start news tab content -->
              <div class="tab-pane fade in active" id="news">
                <ul class="news_tab">
                  <li>
                    @if(count($data)>0)
                    @foreach  ($data as $dat)
                    <div class="media">
                      <div class="media-left">
                        <a class="news_img" href='{{url("/vUser/showNews/{$dat->ID}")}}'>
                          <img class="media-object" src="{{ asset('image/berita/'.$dat->gambar)  }}" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href='{{url("/vUser/showNews/{$dat->ID}")}}'>{{$dat->Judul}}</a>
                       <p><?php
                       $artikel = $dat->Isi;
                       $tag_artikel = strip_tags($artikel);
                       $sub_artikel = substr($tag_artikel,0,50)." . . .";
                       echo $sub_artikel;
                       ?></p>
                      </div>
                    </div>
                    @endforeach
                    @endif
                  </li>
                  <li>
                </ul>
                <a class="see_all" href="{{url('/vUser/news')}}">See All</a>
              </div>
              <!-- Start notice tab content -->
              <div class="tab-pane fade " id="notice">
                <div class="single_notice_pane">
                  <ul class="news_tab">
                    <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="#">
                            <img class="media-object" src="img/news.jpg" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                         <a href="#">Dummy text of the printing and typesetting industry</a>
                         <span class="feed_date">27.02.15</span>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="#">
                            <img class="media-object" src="img/notice.jpg" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                         <a href="#">Dummy text of the printing and typesetting industry</a>
                         <span class="feed_date">28.02.15</span>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="#">
                            <img class="media-object" src="img/notice.jpg" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                         <a href="#">Dummy text of the printing and typesetting industry</a>
                         <span class="feed_date">28.02.15</span>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <ul class="news_tab">
                    <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="#">
                            <img class="media-object" src="img/notice.jpg" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                         <a href="#">Contrary to popular belief, Lorem Ipsum is not simply random text</a>
                         <span class="feed_date">27.02.15</span>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="#">
                            <img class="media-object" src="img/notice.jpg" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                         <a href="#">Dummy text of the printing and typesetting industry</a>
                         <span class="feed_date">28.02.15</span>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="#">
                            <img class="media-object" src="img/notice.jpg" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                         <a href="#">Contrary to popular belief, Lorem Ipsum is not simply random text</a>
                         <span class="feed_date">28.02.15</span>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- Start events tab content -->
              <div class="tab-pane fade " id="events">
                <ul class="news_tab">
                  <li>
                    <div class="media">
                      <div class="media-left">
                        <a class="news_img" href="#">
                          <img class="media-object" src="img/news.jpg" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="#">Dummy text of the printing and typesetting industry</a>
                       <span class="feed_date">27.02.15</span>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media">
                      <div class="media-left">
                        <a class="news_img" href="#">
                          <img class="media-object" src="img/news.jpg" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="#">Dummy text of the printing and typesetting industry</a>
                       <span class="feed_date">28.02.15</span>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media">
                      <div class="media-left">
                        <a class="news_img" href="#">
                          <img class="media-object" src="img/news.jpg" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="#">Dummy text of the printing and typesetting industry</a>
                       <span class="feed_date">28.02.15</span>
                      </div>
                    </div>
                  </li>
                </ul>
                <a class="see_all" href="#">See All</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>
    <!--=========== END ABOUT US SECTION ================-->

    <!--=========== BEGIN WHY US SECTION ================-->
    <section id="whyUs">
      <!-- Start why us top -->
      <div class="row">
        <div class="col-lg-12 col-sm-12">
          <div class="whyus_top">
            <div class="container">
              <!-- Why us top titile -->
              <div class="row">
                <div class="col-lg-12 col-md-12">
                  <div class="title_area">
                    <h2 class="title_two">BIDANG MINAT</h2>
                    <span></span>
                  </div>
                </div>
              </div>
              <!-- End Why us top titile -->
              <!-- Start Why us top content  -->
              <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                  <div class="single_whyus_top wow fadeInUp">
                    <div class="whyus_icon">
                      <span class="fa fa-desktop"></span>
                    </div>
                    <h3>Sistem Informasi</h3>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                  <div class="single_whyus_top wow fadeInUp">
                    <div class="whyus_icon">
                      <span class="fa fa-bug"></span>
                    </div>
                    <h3>Kecerdasan Buatan</h3>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                  <div class="single_whyus_top wow fadeInUp">
                    <div class="whyus_icon">
                      <span class="fa fa-sitemap"></span>
                    </div>
                    <h3>Jaringan Komputer</h3>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                  <div class="single_whyus_top wow fadeInUp">
                    <div class="whyus_icon">
                      <span class="fa fa-unlink"></span>
                    </div>
                    <h3>Metode Numerik</h3>
                  </div>
                </div>
              </div>
              <!-- End Why us top content  -->
            </div>
          </div>
        </div>
      </div>
      <!-- End why us top -->

    <!--=========== BEGIN OUR TUTORS SECTION ================-->
    <section id="studentsTestimonial">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="title_area">
              <h2 class="title_two">Manajemen</h2>
              <span></span>
            </div>
          </div>
        </div>
        <!-- End Our courses titile -->

        <!-- Start Our courses content -->
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="studentsTestimonial_content">
              <div class="row">
                <!-- start single student testimonial -->
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="single_stsTestimonial wow fadeInUp">
                    <img class="stsTesti_img" src="http://informatika.unpad.ac.id/new/wp-content/uploads/2017/04/Pa-Setiawan.jpg" alt="img">
                    <div class="stsTestimonial_content">
                      <h3>Dr. Setiawan Hadi, M.Sc.CS.</h3>
                      <span>KEPALA DEPARTEMEN ILMU KOMPUTER</span>
                      <p>Visi Komputer</p>
                    </div>
                  </div>
                </div>
                <!-- End single student testimonial -->
                <!-- start single student testimonial -->
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="single_stsTestimonial wow fadeInUp">
                    <img class="stsTesti_img" src="http://informatika.unpad.ac.id/new/wp-content/uploads/2017/04/Pa-Juli.jpg" alt="img">
                    <div class="stsTestimonial_content">
                      <h3>Dr. Juli Rejito, M.Kom</h3>
                      <span>KETUA PRODI TEKNIK INFORMATIKA</span>
                      <p>Sistem Database</p>
                    </div>
                  </div>
                </div>
                <!-- End single student testimonial -->
                <!-- start single student testimonial -->
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="single_stsTestimonial wow fadeInUp">
                    <img class="stsTesti_img" src="http://informatika.unpad.ac.id/new/wp-content/uploads/2017/04/Pa-Ino.jpg" alt="img">
                    <div class="stsTestimonial_content">
                      <h3>Drs. Ino Suryana, M.Kom</h3>
                      <span>SEKRETARIS PRODI TEKNIK INFORMATIKA</span>
                      <p>Metode Numerik</p>
                    </div>
                  </div>
                </div>
                <!-- End single student testimonial -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=========== END OUR TUTORS SECTION ================-->

    <!--=========== BEGIN STUDENTS TESTIMONIAL SECTION ================-->
    <section id="studentsTestimonial">
      <div class="container">
       <!-- Our courses titile -->

        <!-- End Our courses content -->
      </div>
    </section>
    <!--=========== END STUDENTS TESTIMONIAL SECTION ================-->
@include('inc.new_footer')
