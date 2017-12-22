@include('inc.header1');

       <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form class="form-horizontal" method="POST" action="{{('/admin/vEducation/insert')}}">

                     {{csrf_field()}}

                      <fieldset>
                        <legend>CREATE EDUCATION</legend>

                        @if(count($errors) > 0)
                            @foreach($errors->all() as $error)

                                <div class="alert alert-danger">
                                    {{$error}}
                                </div>

                            @endforeach
                        @endif

                       <div class="form-group">
                          <label for="inputNPM" class="col-lg-2 control-label">Judul</label>
                          <div class="col-lg-10">
                            <input type="text" name="Judul" class="form-control" id="inputJudul"  placeholder="Judul">
                          </div>
                        </div>

                        <div class="form-group">
                              <label for="inputNama" class="col-lg-2 control-label">Isi</label>
                            <div class="col-lg-10">
                              <textarea name="Isi" class="form-control" id="inputIsi"  placeholder="Isi" > </textarea>
                            </div>
                        </div>


                        <div class="form-group">
                          <div class="col-lg-10 col-lg-offset-2">
                            <button type="reset" class="btn btn-primary">Reset</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{url('/admin/vEducation/table')}}" class="btn btn-primary">Back</a>
                          </div>
                        </div>
                      </fieldset>
                </form>

            </div>
        </div>
</div>



@include('inc.footer1');
