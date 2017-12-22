@include('inc.new_header')


    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">PENGABDIAN MAHASISWA
      </h1>
      <hr>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{{url('/')}}">Home</a>
        </li>
        <li class="breadcrumb-item active">Pengabdian Mahasiswa</li>
      </ol>
      <div class="mb-4" id="accordion" role="tablist" aria-multiselectable="true">
        <table id="datatable-responsive" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nama</th>
              <th>Tempat</th>
              <th>Jenis</th>
              <th>Tanggal</th>

            </tr>
          </thead>
          <tbody>
            @if(count($data)>0)
            @foreach ($data as $dat)
            <tr>
              <td><b>{{$dat->ID}}</b></td>
              <td>{{$dat->Nama}}</td>
              <td>{{$dat->Tempat}}</td>
              <td>{{$dat->Jenis}}</td>
              <td>{{$dat->Tanggal->format('d/m/Y')}}</td>
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
    <!-- /.container -->

@include('inc.new_footer')
