@include('inc.new_header')

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
<hr>
<hr>
<hr>
<hr>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{{url('/')}}">Home</a>
        </li>

        <li class="breadcrumb-item active">Dosen</li>

        <li class="breadcrumb-item active">Lecturer</li>

      </ol>

      <div class="row">

        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="studentsTestimonial_content">

            <div class="row">
              <!-- start single student testimonial -->
              @if(count($data)>0)
              @foreach  ($data as $dat)
              <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="single_stsTestimonial wow fadeInUp">
                  <img class="stsTesti_img" src="{{ asset('image/dosen/'.$dat->gambar)  }}" alt="img">
                  <div class="stsTestimonial_content">
                    <h5>{{$dat->Nama}}</h5>
                    <span>{{$dat->NIDN}}</span>
                    <p>{{$dat->Email}}</p>
                  </div>
                </div>
              </div>
              @endforeach
              @endif

</div>
</div>
</div>
</div>
</div>
</div>
<hr>


@include('inc.new_footer')
