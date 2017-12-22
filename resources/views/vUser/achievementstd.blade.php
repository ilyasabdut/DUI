@include('inc.new_header')

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">PRESTASI MAHASISWA
      </h1>
      <hr>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{{url('/')}}">Home</a>
        </li>
        <li class="breadcrumb-item active">Prestasi Mahasiswa</li>
      </ol>
      <div class="mb-4" id="accordion" role="tablist" aria-multiselectable="true">
        <table id="datatable-responsive" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Prestasi</th>
              <th>Tanggal</th>
              <th>Keterangan</th>
            </tr>
          </thead>
          <tbody>
            @if(count($data)>0)
            @foreach ($data as $dat)
            <tr>
              <td><b>{{$dat->ID}}</b></td>
              <td>{{$dat->Nama}}</td>
              <td>{{$dat->Prestasi}}</td>
              <td>{{$dat->Tanggal->format('d/m/Y')}}</td>
              <td>{{$dat->Keterangan}}</td>
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
<hr>
@include('inc.new_footer')
