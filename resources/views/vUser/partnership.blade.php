@include('inc.headerOther')

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">KERJASAMA
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{{url('/')}}">Home</a>
        </li>
        <li class="breadcrumb-item active">Kerjasama</li>
      </ol>

      <div class="container">
        <table class="table table-striped">
          <tbody>
            <tr>
<th>#</th>
<th>Partner</th>
<th>Program</th>
<th>Jenis</th>
</tr>

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
        <div class="text-center">
                              {!! $data->links(); !!}
                            </div>  
      </div>
    </div>
    <!-- /.container -->

@include('inc.footerOther')
