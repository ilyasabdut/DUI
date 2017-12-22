@include('inc.header1')
    <script src="{{URL::to('/')}}/Asset/ckeditor/ckeditor.js"></script>

       <div class="container">
        <div class="row">
            <div class="col-md-10">
                <form class="form-horizontal" method="POST" action="{{('/admin/vNews/insert')}}" enctype="multipart/form-data">
                  {{csrf_field()}}

                   <fieldset>
                     <h1 class="page-header">Berita</h1>
                  @if(count($errors) > 0)
                      @foreach($errors->all() as $error)

                          <div class="alert alert-danger">
                              {{$error}}
                          </div>

                      @endforeach
                  @endif

                  <div class="form-group">
                    <div class="col-lg-10">
                      <input type="text" name="Judul" class="form-control" id="inputJudul" placeholder="Judul">
                    </div>
                  </div>

                <textarea id="editor1" name="Isi" rows="10" cols="80"></textarea>
                  <p></p>
                <script type="text/javascript">
                if ( typeof CKEDITOR == 'undefined' )
                {
                  document.write(
                    'CKEditor not found');
                }
                else
                {
                var editor = CKEDITOR.replace( 'editor1' );
                CKFinder.setupCKEditor( editor, '' ) ;
                }
                </script>

                <div class="form-group">
                  <div class="col-lg-10">
                    <input type="text" name="Tag" class="form-control" id="inputTag" placeholder="Tag">
                  </div>
                </div>

                <div class="form-group">
                  <label for="image" class="col-lg-2 control-label">Foto</label>
                <div class="col-lg-10">
                    <input type="file" name="image" class="form-control" id="image">
                </div>
                </div>

                <div class="form-group">
                  <div class="col-lg-10">
                    <button type="reset" class="btn btn-primary">Reset</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{url('/admin/vNews/table')}}" class="btn btn-primary">Back</a>
                  </div>
                </div>
                </fieldset>
              </form>
            </div>
        </div>
    </div>
</div>

@include('inc.footer1');
