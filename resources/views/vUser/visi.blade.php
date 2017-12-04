@include('inc.headerOther')
    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">VISI & MISI
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{{url('/')}}">Home</a>
        </li>
        <li class="breadcrumb-item active">Visi & Misi</li>
      </ol>

      <div class="mb-4" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="card">
          <div class="card-header" role="tab" id="headingOne">
            <h5 class="mb-0">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Visi Informatika Unpad</a>
            </h5>
          </div>
          <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
            <div class="card-body">
              <tr>
                <td>
                  <ol>
                  <p style="text-align:justify">Pada tahun 2026, menjadi Prodi Teknik Informatika yang unggul di tingkat nasional serta diakui di tingkat regional dalam bidang pendidikan, penelitian, dan pengabdian kepada masyarakat.</p>

                  </ol>
                </td>
              </tr>
            </div>
        </div>
      </div>
    <div class="card">
          <div class="card-header" role="tab" id="headingTwo">
            <h5 class="mb-0">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">Misi Informatika Unpad</a>
            </h5>
          </div>
          <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="card-body">
              <tr>
                <td>
                  <ol  style="text-align:justify">
<li>Menghasilkan lulusan yang bermutu, bermoral, dan profesional dalam bidang teknik informatika serta mampu beradaptasi terhadap perkembangan ilmu pengetahuan dan teknologi sehingga dapat bersaing secara nasional dan regional.</li>
<li>Meningkatkan pemberdayaan kelompok penelitian/kelompok bidang Minat (KBM) dalam pengembangan dan penerapan bidang sistem informasi dan rekayasa perangkat lunak, jaringan komputer dan komunikasi data, sistem cerdas dan sistem grafika, dan ilmu komputasi dan metode numerik. yang bertaraf nasional dan regional, untuk mendukung pengembangan ilmu pengetahuan dan teknologi.</li>
<li>Meningkatkan penerapan hasil penelitian dasar dan terapan dalam bidang informatika untuk ikut serta dalam mendukung pembangunan nasional dan kesejahteraan masyarakat.</li>
</ol>
                </td>
              </tr>
            </div>
          </div></div></div></div></div>
      </div>
    <!-- /.container -->
      @include('inc.footerHome')