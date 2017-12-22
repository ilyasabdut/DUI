@include('inc.new_header')

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">MAHASISWA
      </h1>
      <hr>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{{url('/')}}">Home</a>
        </li>
        <li class="breadcrumb-item active">Mahasiswa</li>
      </ol>
      <div class="mb-4" id="accordion" role="tablist" aria-multiselectable="true">
        <table id="datatable-responsive" class="table table-striped table-bordered">
          <thead>
           <tr>
              <th>NPM</th>
              <th>Nama</th>
              <th>Email</th>
              <th>Angkatan</th>
            </tr>
          </thead>
          <tbody>
            @if(count($data)>0)
            @foreach ($data as $dat)
             <tr>
              <td><strong>{{$dat->NPM}}</strong></td>
              <td>{{$dat->Nama}}</td>
              <td>{{$dat->Email}}</td>
             <td>{{$dat->TanggalMasuk->format('Y')}}</td>
            </tr>
            @endforeach
            @endif
          </tbody>
          </table>
            </div>
          </div>
        </div>
      </div>
        </div>
      </div>

    </div>

    <!-- /.container -->

  @include('inc.new_footer')
