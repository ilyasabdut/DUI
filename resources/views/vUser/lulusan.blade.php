@include('inc.headerOther')
    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">KOMPETENSI & PROSPEK LULUSAN
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{{url('/')}}">Home</a>
        </li>
        <li class="breadcrumb-item active">Kompetensi & Prospek Lulusan</li>
      </ol>

     <div class="mb-4" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="card">
          <div class="card-header" role="tab" id="headingOne">
            <h5 class="mb-0">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Kompetensi Lulusan</a>
            </h5>
          </div>
          <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
            <div class="card-body">
              <tr>
                <td>
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
                </td>
              </tr>
            </div>
        </div>
      </div>
    <div class="card">
          <div class="card-header" role="tab" id="headingTwo">
            <h5 class="mb-0">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">Prospek Lulusan</a>
            </h5>
          </div>
          <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="card-body">
              <tr>
                <td>
                  <ul class="list-inline"  style="text-align:justify ">
                    <li type="disc">Lulusan program studi Teknik Informatika Universitas Padjadjaran diharapkan dapat mengisi lapangan kerja di berbagai institusi pemerintah, perusahaan swasta, dan industri.
                    <li type="disc">Lulusan Teknik Informatika dapat menjadi karyawan, wiraswastawan (entreupreneur), profesional, birokrat, dan akademisi.</li>
                    <li type="disc">Lulusan diarahkan dapat mengisi karir pekerjaan bidang supervisi, asisten manajer dan administrator.</li>
                    <li type="disc">Sebagai contoh lulusan Teknik Informatika harus mampu menjadi Capacity Planning Supervisor, Database Administrator, Customer Service Supervisor, Data Communication Assistant manager, Data Entry Supervisor, Information Center Manager, Hardware Installation Supervisor, System Administrator, Webmaster, Project Manager Applications, Project Manager Distributed Systems, Project Network Technical Services, Project Manager Implementation Deployment, dan lain-lain.</li>
                  </ul>
                </td>
              </tr>
            </div>
          </div></div></div></div></div>
      </div>
    <!-- /.container -->
      @include('inc.footerHome')