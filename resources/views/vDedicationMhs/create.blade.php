@include('inc.header1');

       <div class="container">
        <div class="row">
            <div class="col-md-6">

                <form class="form-horizontal" method="POST" action="{{('/admin//vDedicationMhs/insert')}}">

                <form class="form-horizontal" method="POST" action="{{('/admin/vDedicationMhs/insert')}}">


                     {{csrf_field()}}

                      <fieldset>
                        <legend>CREATE STUDENT SOCIAL ENGAGEMENT</legend>

                        @if(count($errors) > 0)
                            @foreach($errors->all() as $error)

                                <div class="alert alert-danger">
                                    {{$error}}
                                </div>

                            @endforeach
                        @endif

                        <div class="form-group">
                          <label for="inputNPM" class="col-lg-2 control-label">NPM</label>
                          <div class="col-lg-10">
                            <input type="text" name="NPM" class="form-control" id="inputNPM" placeholder="NPM">
                          </div>
                        </div>

                        <div class="form-group">
                              <label for="inputNama" class="col-lg-2 control-label">Nama</label>
                            <div class="col-lg-10">
                              <input type="text" name="Nama" class="form-control" id="inputNama" placeholder="Nama">
                            </div>
                        </div>

                        <div class="form-group">
                              <label for="inputTempat" class="col-lg-2 control-label">Tempat</label>
                            <div class="col-lg-10">
                                <input type="text" name="Tempat" class="form-control" id="inputTempat" placeholder="Tempat">
                            </div>
                        </div>

                        <div class="form-group">
                              <label for="inputJenis" class="col-lg-2 control-label">Jenis</label>
                            <div class="col-lg-10">
                                <input type="text" name="Jenis" class="form-control" id="inputJenis" placeholder="Jenis">
                            </div>
                        </div>


                        <div class="form-group">
                              <label for="inputTanggal" class="col-lg-2 control-label">Tanggal</label>
                            <div class="col-lg-10">
                                <input type="date" name="Tanggal" class="form-control" id="inputTanggal" placeholder="Tanggal">
                            </div>
                        </div>

                        <div class="form-group">
                          <div class="col-lg-10 col-lg-offset-2">
                            <button type="reset" class="btn btn-primary">Reset</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{url('/admin//vDedicationMhs/table')}}" class="btn btn-primary">Back</a>
                          </div>
                        </div>
                      </fieldset>
                </form>

            </div>
        </div>
</div>





@include('inc.footer1');
