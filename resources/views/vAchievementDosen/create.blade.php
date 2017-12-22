@include('inc.header1');

       <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form class="form-horizontal" method="POST" action="{{('/admin/vAchievementDosen/insert')}}">

                     {{csrf_field()}}

                      <fieldset>
                        <legend>Masukan Prestasi Doden</legend>

                        @if(count($errors) > 0)
                            @foreach($errors->all() as $error)

                                <div class="alert alert-danger">
                                    {{$error}}
                                </div>

                            @endforeach
                        @endif

                       <div class="form-group">
                          <label for="inputNIDN" class="col-lg-2 control-label">NIDN</label>
                          <div class="col-lg-10">
                            <input type="text" name="NIDN" class="form-control" id="inputNIDN" placeholder="NIDN">
                          </div>
                        </div>

                        <div class="form-group">
                              <label for="inputNama" class="col-lg-2 control-label">Nama</label>
                            <div class="col-lg-10">
                              <input type="text" name="Nama" class="form-control" id="inputNama" placeholder="Nama">
                            </div>
                        </div>

                        <div class="form-group">
                              <label for="inputPrestasi" class="col-lg-2 control-label">Prestasi</label>
                            <div class="col-lg-10">
                                <input type="text" name="Prestasi" class="form-control" id="inputPrestasi" placeholder="Prestasi">
                            </div>
                        </div>

                        <div class="form-group">
                              <label for="inputTanggal" class="col-lg-2 control-label">Tanggal</label>
                            <div class="col-lg-10">
                                <input type="date" name="Tanggal" class="form-control" id="inputTanggal" placeholder="Tanggal">
                            </div>
                        </div>


                        <div class="form-group">
                              <label for="inputKeterangan" class="col-lg-2 control-label">Keterangan</label>
                            <div class="col-lg-10">
                                <input type="text" name="Keterangan" class="form-control" id="inputKeterangan" placeholder="Keterangan">
                            </div>
                        </div>


                        <div class="form-group">
                          <div class="col-lg-10 col-lg-offset-2">
                            <button type="reset" class="btn btn-primary">Reset</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{url('/admin//vAchievementDosen/table')}}" class="btn btn-primary">Back</a>
                          </div>
                        </div>
                      </fieldset>
                </form>

            </div>
        </div>
</div>





@include('inc.footer1');
