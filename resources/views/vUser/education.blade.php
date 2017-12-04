@include('inc.headerOther')

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">JADWAL KULIAH
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{{url('/')}}">Home</a>
        </li>
        <li class="breadcrumb-item active">Jadwal Kuliah</li>
      </ol>

      <div class="mb-4" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="card">
          <div class="card-header" role="tab" id="headingOne">
            <h5 class="mb-0">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Semester Gasal 2016/2017</a>
            </h5>
          </div>
          <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
            <div class="card-body">
              <tr>
                <td>
                  <ul>
                    <li><strong>Penerimaan Mahasiswa Baru</strong></li>
                      <ul>
                        <li>Universitas: 22 Agustus 2016</li>
                      </ul>
                    <li><strong>Perkuliahan</strong>
                      <ul>
                        <li>Masa Perkuliahan:  1 September 2016 s.d. 29 Desember 2016</li>
                        <li>Ujian Tengah Semester : 20 Oktober 2016 s.d. 27 Oktober 2016</li>
                        <li>Ujian Akhir Semester : 15 Desember 2016 s.d. 29 Desember 2016</li>
                      </ul>
                    <li><strong>Jadwal perkuliahan dapat dilihat pada SIAT</strong>
                  </ul>
                </tr>
              </td>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" role="tab" id="headingTwo">
            <h5 class="mb-0">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Semester Genap 2016/2017</a>
            </h5>
          </div>
          <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="card-body">
              <tr>
                <td>
                  <ul>
                    <li><strong>Her Registrasi</strong></li>
                  <ul>
                    <li>Universitas: 26 Januari 2017 &#8211; 6 Februari 2017</li>
                  </ul>
                    <li><strong>Perkuliahan</strong>
                      <ul>Masa Perkuliahan:  15 Februari 2017 s.d. 14 Juni 2017</li>
                        <li>Ujian Tengah Semester : 25 April 2017 s.d. 12 April 2017</li>
                        <li>Ujian Akhir Semester : 31 Mei 2017 s.d. 14 Juni 2017</li>
                      </ul>
                    <li><strong>Jadwal Kuliah dapat dilihat pada SIAT.</strong>
                  </ul>
                </td>
              </tr>
            </div>
          </div>
        </div>
      </div>
      <td><ul>
        <em>Informasi lengkap tentang Kalender Akademik Tahun 2016/2017 dapat diunduh <a href="http://www.unpad.ac.id/wp-content/uploads/2012/10/PR-N0-22-TAHUN-2016-KALENDAR-KEGIATAN-AKADEMIK.pdf" target="_blank"><strong>disini</strong></a>.</em></p>
      </ul></td>
    </div>
    <!-- /.container -->

    @include('inc.footerOther')

