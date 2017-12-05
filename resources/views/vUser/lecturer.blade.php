@include('inc.headerOther')

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">LECTURER
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{{url('/')}}">Home</a>
        </li>
        <li class="breadcrumb-item active">Lecturer</li>
      </ol>

     <div class="row">
        @if(count($data)>0)
               @foreach  ($data as $dat)
         <div class="col-md-4 col-sm-4">
              <div class="team-member">
                  <div class="team-img">

                    <img class = "mx-auto rounded-circle" src="{{ asset('image/'.$dat->gambar)  }}" alt="team member" class="img-responsive">
                  </div>
                    <h6 style= "color: #a5a5a5">{{$dat->Nama}}</h6>
                   <span style= "color: #a5a5a5">{{$dat->NIDN}}<br></span>
                  <span style= "color: #a5a5a5">{{$dat->Email}}</span>
              </div>
           </div>
        @endforeach
    @endif

    </div>
    <div>
 <div class="text-center">
                              {!! $data->links(); !!}
                            </div>    </div>
    </div>
    <!-- /.container -->

  @include('inc.footerOther')
