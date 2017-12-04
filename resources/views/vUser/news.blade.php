@include('inc.headerOther')

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">News
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{{url('/')}}">Home</a>
        </li>
        <li class="breadcrumb-item active">News</li>
      </ol>

      <div class="row">
        @if(count($data)>0)
               @foreach  ($data as $dat)
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
           <a href='{{url("/vUser/showNews/{$dat->ID}")}}'><img class="card-img-top" src='{{ "data:img/" . $dat->imageType . ";base64," . $dat->image }}' alt=""></a>
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

    <div>
       {!! $data->links(); !!}
    </div>
  </div>
    <!-- /.container -->
    @include('inc.footerOther')
