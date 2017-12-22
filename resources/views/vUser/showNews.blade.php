
@include('inc.new_header')
<!--=========== BEGIN COURSE BANNER SECTION ================-->
    <section id="courseArchive">
      <div class="container">
        <div class="row">
          <hr>
          <hr>
          <!-- start course content -->
          <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="courseArchive_content">
              <!-- start blog archive  -->
              <div class="row">
                <!-- start single blog -->
                <div class="col-lg-12 col-12 col-sm-12">
                  <div class="single_blog">
                    <!-- start events slider -->
                    <div class="events_slider_area">
                      <div class="events_slider">
                        <div><img src="{{ asset('image/berita/'.$data->gambar)  }}" alt="img"></div>
                      </div>
                    </div>
                    <!-- End events slider -->
                    <h2 class="blog_title"><a href=""></a>{{$data->Judul}}</h2>
                    <div class="blog_commentbox">
                    </div>
                    <p><?php echo $data->Isi; ?></p>
                  </div>
                  <!-- single blog nex & prev button -->
                </div>
                <!-- End single blog -->
              </div>
              <!-- end blog archive  -->
              <!-- start related post -->
            </div>
          </div>
          <!-- End course content -->
        </div>
      </div>
    </section>
    <!--=========== END COURSE BANNER SECTION ================-->
  <hr>
@include('inc.new_footer')
