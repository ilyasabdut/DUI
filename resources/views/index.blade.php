
    @include('inc.headerOther')
    <!-- Header -->
    <header class="masthead">
      <div class="container">
          <!--<div class="intro-lead-in">Welcome To</div>
          <div class="intro-heading">COMPUTER SCIENCE</div>-->

        </div>
      </div>
    </header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" >
            <div class="carousel-caption d-none d-md-block">
              <h3>First Slide</h3>
              <p>This is a description for the first slide.</p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('http://placehold.it/1900x1080')">
            <div class="carousel-caption d-none d-md-block">
              <h3 href="">Second Slide</h3>
              <p>This is a description for the second slide.</p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('http://placehold.it/1900x1080')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Third Slide</h3>
              <p>This is a description for the third slide.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
       <section class="bg-light" id="portfolio1" style="padding-top: 50px;">

     <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h1 class="section-heading"  style="padding-top: 30px;">Manajemen</h1>
          </div>
        </div>
<div class="container">
                    <div class="row">
                        <div class="heading-title text-center">
                        </div>

                        <div class="col-md-4 col-sm-4">
                            <div class="team-member">
                                <div class="team-img">
                                    <img class = "mx-auto rounded-circle" src="http://informatika.unpad.ac.id/new/wp-content/uploads/2017/04/Pa-Setiawan.jpg" alt="team member" class="img-responsive">
                                </div>
                                        <h6 style= "color: #a5a5a5">Dr. Setiawan Hadi, M.Sc.CS.</h6>
                                         <span style= "color: #a5a5a5">KEPALA DEPARTEMEN ILMU KOMPUTER</span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="team-member">
                                <div class="team-img">
                                    <img class = "mx-auto rounded-circle" src="http://informatika.unpad.ac.id/new/wp-content/uploads/2017/04/Pa-Juli.jpg" alt="team member" class="img-responsive">
                               </div>
                                        <h6 style= "color: #a5a5a5">DR. JULI REJITO, M.KOM</h6>
                                         <span style= "color: #a5a5a5">KETUA PRODI TEKNIK INFORMATIKA</span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="team-member">
                                <div class="team-img">
                                    <img class = "mx-auto rounded-circle" src="http://informatika.unpad.ac.id/new/wp-content/uploads/2017/04/Pa-Ino.jpg" alt="team member" class="img-responsive">
                                </div>
                                        <h6 style= "color: #a5a5a5">DRS. INO SURYANA, M.KOM</h6>
                                         <span style= "color: #a5a5a5">SEKRETARIS PRODI TEKNIK INFORMATIKA</span>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="row">

        @if(count($data)>0)
               @foreach  ($data as $dat)
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src='{{ "data:img/" . $dat->imageType . ";base64," . $dat->image }}' alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href='{{url("/vUser/showNews/{$dat->ID}")}}'>{{$dat->Judul}}</a>
              </h4>
              <p class="card-text">
                <?php
                $artikel = $dat->Isi;
                $tag_artikel = strip_tags($artikel);
                $sub_artikel = substr($tag_artikel,0,150)." . . .";
                echo $sub_artikel;
                ?>
              </p>
            </div>
          </div>
        </div>

        @endforeach
                                @endif

    </div>
  </div>
</div>


<!--
</section>
    <!-- About Computer Science
    <section class="bg-light" id="portfolio" style="padding-top: 50px;">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">About Computer Science</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="{{URL::to('/')}}/assets/one/img/new/Visi.png" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Visi</h4>

            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="{{URL::to('/')}}/assets/one/img/new/Misi.png" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Misi</h4>

            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="{{URL::to('/')}}/assets/one/img//new/Rencana.png" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Rencana Strategis</h4>

            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="{{URL::to('/')}}/assets/one/img/new/latar.png" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Latar Belakang</h4>

            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="{{URL::to('/')}}/assets/one/img/new/lulus.png" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Kompetensi Lulusan</h4>

            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="{{URL::to('/')}}/assets/one/img/new/lulusan.png" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Prospek Lulusan</h4>
            </div>
          </div>
        </div>
      </div>
    </section>

     Portfolio Modals


    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">

                  <h2>Visi Computer Science</h2>
                  <img class="{{URL::to('/')}}/assets/one/img-fluid d-block mx-auto" src="{{URL::to('/')}}/assets/one/img/new/Visi.png" alt="">
                  <p style="text-align:justify">Pada tahun 2026, menjadi Prodi Teknik Informatika yang unggul di tingkat nasional serta diakui di tingkat regional dalam bidang pendidikan, penelitian, dan pengabdian kepada masyarakat.</p>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Visi</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <h2>Misi</h2>
                  <img class="img-fluid d-block mx-auto" src="{{URL::to('/')}}/assets/one/img/new/Misi.png" alt="">
                  <tr>
<td>
<ol  style="text-align:justify">
<li>Menghasilkan lulusan yang bermutu, bermoral, dan profesional dalam bidang teknik informatika serta mampu beradaptasi terhadap perkembangan ilmu pengetahuan dan teknologi sehingga dapat bersaing secara nasional dan regional.</li>
<li>Meningkatkan pemberdayaan kelompok penelitian/kelompok bidang Minat (KBM) dalam pengembangan dan penerapan bidang sistem informasi dan rekayasa perangkat lunak, jaringan komputer dan komunikasi data, sistem cerdas dan sistem grafika, dan ilmu komputasi dan metode numerik. yang bertaraf nasional dan regional, untuk mendukung pengembangan ilmu pengetahuan dan teknologi.</li>
<li>Meningkatkan penerapan hasil penelitian dasar dan terapan dalam bidang informatika untuk ikut serta dalam mendukung pembangunan nasional dan kesejahteraan masyarakat.</li>
</ol>
</tr>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Misi</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <h2>Rencana Strategis</h2>
                  <img class="img-fluid d-block mx-auto" src="{{URL::to('/')}}/assets/one/img/new/rencana.png" alt="">
                  <tr>
<td>
<ol>
<li><a href="https://drive.google.com/open?id=0Bx4uEsniwF4KcWQzM2pIdjJ0Q0E" target = '_blank'>Rencana Strategis UNPAD 2015-2019</a>
<li><a href="https://drive.google.com/open?id=0Bx4uEsniwF4KRlVfS2I4Ql9ub0U" target = '_blank'>Rencana Strategis Fakultas MIPA 2017-2021</a>
</ol>
</tr>

                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Rencana Strategis</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <h2>Latar Belakang</h2>
                  <img class="img-fluid d-block mx-auto" src="{{URL::to('/')}}/assets/one/img/new/latar.png" alt="">
                  <p  style="text-align:justify">
                  <tr>
                        <td>Program Sarjana Program Studi Teknik Informatika merupakan pengembangan dari Bidang Minat Ilmu Komputer di Jurusan Matematika FMIPA Universitas Padjadjaran, sesuai dengan rencana strategis jurusan, fakultas, dan universitas. Kurikulum Bidang Minat Ilmu Komputer diberlakukan tahun 2004 dan telah menghasilkan lulusan yang terserap di berbagai institusi baik negeri maupun swasta tersebar di Indonesia.</td>
                  </tr>
                  <tr>
                        <td>Mengingat pertumbuhan teknologi yang cepat dan tingginya kebutuhan masyarakat dalam bidang Teknik Informatika (lulusan sekitar 5% dari kebutuhan), dan tingginya minat untuk mengikuti pendidikan bidang Teknik Informatika (sekitar 4% diterima dari peminat SNMPTN), serta mempertimbangkan berbagai masukan dari stakeholder dan alumni untuk menyempurnakan kurikulum yang mandiri sesuai dengan kebutuhan, maka disusun proposal pendirian Program Studi Teknik Informatika, dan telah mendapat persetujuan Dikti dengan <a href="http://informatika.unpad.ac.id/web/wp-content/uploads/2013/07/SK305.pdf" target = '_blank'><strong>SK Mendikbud Nomor: 305/E/O/2011</strong></a> tanggal 21 Desember 2011 tentang Ijin Penyelenggaraan Program Studi Teknik Informatika pada Universitas Padjadjaran. Pada tahun 2014 program studi S-1 Teknik Informatika memperoleh <strong>akreditasi B</strong> dari BAN PT sesuai dengan <a href="https://drive.google.com/open?id=0Bx4uEsniwF4Kclc5M0F1TGZiTTQ" target = '_blank'><strong>Surat Keputusan Nomor 483/SK/BAN-PT/Akred/S/XII/2014</strong></a>. </td>
                  </tr>
                  </p>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Latar Belakang</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
           <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <h2>Kompetensi Lulusan</h2>
                  <img class="img-fluid d-block mx-auto" src="{{URL::to('/')}}/assets/one/img/new/lulus.png" alt="">
                  <p  style="text-align:justify"><strong>KOMPETENSI UTAMA:</strong> mampu melakukan pengembangan perangkat lunak untuk berbagai keperluan, melakukan analisis terhadap sistem dalam suatu instansi atau perusahaan dan membuat solusi yang integratif dengan memanfaatkan perangkat lunak, mampu merencanakan dan pengevaluasian penerapan Teknologi Informasi pada sebuah organisasi, mampu merancang dan memelihara basis data termasuk data warehouse untuk suatu instansi atau perusahaan, mampu melakukan pengujian fungsi-fungsi perangkat lunak, mampu mengembangkan, merancang dan membangun serta memelihara website dengan berbagai layanan dan fasilitasnya.</p>
                  <ul class="list-inline"  style="text-align:justify">
                    <tr>
                          <td><strong>KOMPETENSI KHUSUS</strong> : lulusan teknik Informatika Unpad dapat memilih salah satu dari empat peminatan berikut:<br />
                          (1) Sistem Informasi dan Rekayasa Perangkat Lunak (SIRPL),<br/>
                          (2) Jaringan Komputer dan Komunikasi Data (JKKD),<br />
                          (3) Sistem Cerdas dan Sistem Grafika (SCSG), serta<br />
                          (4) Ilmu Komputasi dan Metode Numerik (IKMN).</td>
                          </tr>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Kompetensi Kelulusan</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
 <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <h2>Prospek Lulusan</h2>
                  <img class="img-fluid d-block mx-auto" src="{{URL::to('/')}}/assets/one/img/new/lulusan.png" alt="">
                  <ul class="list-inline"  style="text-align:justify">
                    <li>Lulusan program studi Teknik Informatika Universitas Padjadjaran diharapkan dapat mengisi lapangan kerja di berbagai institusi pemerintah, perusahaan swasta, dan industri.</li>
                    <li>Lulusan Teknik Informatika dapat menjadi karyawan, wiraswastawan (entreupreneur), profesional, birokrat, dan akademisi.</li>
                    <li>Lulusan diarahkan dapat mengisi karir pekerjaan bidang supervisi, asisten manajer dan administrator.</li>
                    <li>Sebagai contoh lulusan Teknik Informatika harus mampu menjadi Capacity Planning Supervisor, Database Administrator, Customer Service Supervisor, Data Communication Assistant manager, Data Entry Supervisor, Information Center Manager, Hardware Installation Supervisor, System Administrator, Webmaster, Project Manager Applications, Project Manager Distributed Systems, Project Network Technical Services, Project Manager Implementation Deployment, dan lain-lain.</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>-->
        </div>
      </div>
    </div>
  </div>
</div>

@include('inc.footerHome')
