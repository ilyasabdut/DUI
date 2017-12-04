@include('inc.headerOther')

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">MAHASISWA
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{{url('/')}}">Home</a>
        </li>
        <li class="breadcrumb-item active">Mahasiswa</li>
      </ol>

      

      <div class="container">
        <table class="table table-striped">
          <tbody>
            <tr>
              <th>#</th>
              <th>NPM</th>
              <th>Nama</th>
              <th>Email</th>
            </tr>
            @if(count($data)>0)
              @foreach($data as $dat)
            <tr>
              <td><strong>{{$dat->ID}}</strong></td>
              <td><b>{{$dat->NPM}}</b></td>
              <td><strong>{{$dat->Nama}}</strong></td>
              <td><strong>{{$dat->Email}}</strong></td>
            </tr>
            @endforeach
          @endif
          </tbody>
        </table>
      </div>
 <div class="text-center">
                              {!! $data->links(); !!}
              </div>   
    </div>
    <!-- /.container -->

  @include('inc.footerOther')

