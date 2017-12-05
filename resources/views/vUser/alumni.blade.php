@include('inc.headerOther')

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">ALUMNI
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{{url('/')}}">Home</a>
        </li>
        <li class="breadcrumb-item active">Alumni</li>
      </ol>

      <div class="container">
        <table class="table table-striped">
          <tbody>
            <tr>
              <th>#</th>
              <th>Nama/Pembimbing</th>
              <th>Lulus/Penguji</th>
              <th>Skripsi</th>
            </tr>
            @if(count($data)>0)
              @foreach($data as $dat)
            <tr>
              <td><strong>{{$dat->ID}}</strong></td>
              <td><b>{{$dat->Nama}}/<br><strong>{{$dat->Pembimbing}}</strong></b></td>
              <td><strong>{{$dat->Tanggal->format('d-m-Y')}}/<br></strong>{{$dat->Pembimbing}}</td>
              <td><strong>{{$dat->Judul}}</strong></td>
            </tr>
              @endforeach
            @endif

          </tbody>
        </table>
         <div class="text-center">
                              {!! $data->links(); !!}
                            </div>
      </div>
    </div>
    
    <!-- /.container -->

  @include('inc.footerOther')

