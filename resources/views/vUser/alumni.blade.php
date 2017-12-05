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
              <th style="text-align: center;">ID</th>
              <th style="text-align: center;">NPM</th>
              <th style="text-align: center;">Nama</th>
              <th style="text-align: center;">Pembimbing</th>
              <th style="text-align: center;">Judul</th>
              <th style="text-align: center;">Tanggal Lulus</th>
              <th style="text-align: center;">Angkatan</th>


            </tr>
            @if(count($data)>0)
              @foreach($data as $dat)
            <tr>
             <td style="text-align: center;"><b>{{$dat->ID}}</b></td>
              <td style="text-align: center;"><strong>{{$dat->NPM}}</strong></td>
              <td style="text-align: center;">{{$dat->Nama}}</td>
              <td style="text-align: center;">{{$dat->Pembimbing}}</td>
              <td style="text-align: center;"><strong>{{$dat->Judul}}</strong></td>      
              <td style="text-align: center;"><strong>{{$dat->Tanggal->format('d/m/Y')}}</strong></td>
             <td style="text-align: center;">{{$dat->angkatan}}</td>

            </tr>
              @endforeach
            @endif

          </tbody>
        </table>
        
                              {!! $data->links(); !!}
                          
      </div>
    </div>
    
    <!-- /.container -->

  @include('inc.footerOther')

