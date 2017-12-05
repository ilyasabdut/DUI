@include('inc.headerOther')


    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">STUDENT PUBLICATION
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{{url('/')}}">Home</a>
        </li>
        <li class="breadcrumb-item active">Student Publication</li>
      </ol>
 <div class="mb-4" id="accordion" role="tablist" aria-multiselectable="true">
        @if(count($data)>0)
               @foreach  ($data as $year => $mahs)
        <div class="card">
          <div class="card-header" role="tab" id="headingOne">
            <h5 class="mb-0">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$year}}" aria-expanded="true" aria-controls="collapse{{$year}}"> {{$year}}
          </a>
            </h5>
          </div>
        @if($year == date('Y'))
          <div id="collapse{{$year}}" class="collapse show " role="tabpanel" aria-labelledby="headingOne">
            @else
         <div id="collapse{{$year}}" class="collapse " role="tabpanel" aria-labelledby="headingOne">
          @endif
              <div class="card-body">
               <div class="container">
        <table class="table table-striped">
          <thead>
            <tr>
              <th style="text-align: center;">ID</th>
              <th style="text-align: center;">NPM</th>
              <th style="text-align: center;">Nama</th>
              <th style="text-align: center;">Judul</th>
              <th style="text-align: center;">Tanggal</th>
              <th style="text-align: center;">Keterangan</th>
            </tr>
          </thead> 
          <tbody>
            @foreach($mahs as $mhs)
            <tr>
              <td style="text-align: center;"><b>{{$mhs->ID}}</b></td>
              <td style="text-align: center;"><strong>{{$mhs->NPM}}</strong></td>
              <td style="text-align: center;"><strong>{{$mhs->Nama}}</strong></td>
              <td style="text-align: center;"><strong>{{$mhs->Judul}}</strong></td>
              <td style="text-align: center;"><strong>{{$mhs->Tanggal->format('d/m/Y')}}</strong></td>
              <td style="text-align: center;"><strong>{{$mhs->Keterangan}}</strong></td>
            </tr>
              @endforeach
             </tbody>
          </table>
            </div>
           </div>
          </div>
        </div>
          @endforeach
          @endif
        </div>
      </div>
    <!-- /.container -->

@include('inc.footerOther')

