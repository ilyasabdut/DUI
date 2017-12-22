@include('inc.new_header')

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">KERJASAMA
      </h1>
      <hr>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{{url('/')}}">Home</a>
        </li>
        <li class="breadcrumb-item active">Kerjasama</li>
      </ol>
      <div class="mb-4" id="accordion" role="tablist" aria-multiselectable="true">
        <table id="datatable-responsive" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>#</th>
              <th>Partner</th>
              <th>Program</th>
              <th>Jenis</th>
            </tr>
          </thead>
          <tbody>
            @if(count($data)>0)
            @foreach($data as $dat)
            <tr>
              <td>{{$dat->ID}}</p>
              <td>{{$dat->Partner}}</p>
              <td>{{$dat->Program}}</p>
              <td>{{$dat->Jenis}}
            </tr>
            @endforeach
            @endif
          </tbody>
        </table>
      </div>
    </div>
    <!-- /.container -->

@include('inc.new_footer')
