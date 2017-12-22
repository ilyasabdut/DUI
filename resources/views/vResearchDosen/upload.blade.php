@include('inc.header1')

<!-- page content -->
  <div class="container">
    <div class="row">
      <div class="col-md-6">
         <fieldset>

             <legend>Penelitian Dosen</legend>
               @if(session('info'))
                          <div class="alert alert-success">
                      {{session('info')}}
                          </div>
                    @endif

    <a href="{{ URL::to('/admin/vResearchDosen/downloadExcel/xls') }}"><button class="btn btn-success">Download Excel xls</button></a>
    <a href="{{ URL::to('/admin/vResearchDosen/downloadExcel/xlsx') }}"><button class="btn btn-success">Download Excel xlsx</button></a>
    <a href="{{ URL::to('/admin/vResearchDosen/downloadExcel/csv') }}"><button class="btn btn-success">Download CSV</button></a>

    <form style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 10px;"
     action="{{ URL::to('/admin/vResearchDosen/import')}}"     class="form-horizontal" method="post"
     enctype="multipart/form-data">

     {!! csrf_field() !!}
     <p style="color: red">{{$errors->first('import_file')}}</p>



      <input type="file" name="import_file" />
      <button class="btn btn-primary">Import File</button>

    </form>

                  </fieldset>
                  </div>

                </div>
        <!-- /page content -->
@include('inc.footer1')
