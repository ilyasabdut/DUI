@include('inc.header1')
<script src="{{URL::to('/')}}/Asset/ckeditor/ckeditor.js"></script>
<div class="table-heading">
<h2>Prestasi Mahasiswa</h2>
</div>
@if(session('info'))
<div class="alert alert-success">
{{session('info')}}
</div>
@endif
<div class="panel panel-default">
<div class="panel-heading">
			      	                <a href='{{url("admin/vAchievementMhs/create")}}' class="label label-primary"><i class="glyphicon glyphicon-pencil"></i> Create </a>&nbsp;
                                    <a href='{{url("admin/vAchievementMhs/upload")}}' class="label label-success"><i class="glyphicon glyphicon-sort"></i> Import/Export </a>

                        </div>
                        <div class="panel-body">

                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">

                            <table id="datatable-responsive" class="table table-striped table-bordered">

                                <thead>
                                    <tr>
                                    	<th>ID</th>
                                        <th>NPM</th>
                                        <th>Nama</th>
                                        <th>Prestasi</th>
                                        <th>Tanggal</th>
                                        <th>Keterangan</th>
                                        <th width="">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @if(count($data)>0)
				  						          @foreach ($data as $dat)
                                    <tr>
									   	                <td>{{$dat->ID}}</td>
                                      <td>{{$dat->NPM}}</td>
                                      <td>{{$dat->Nama}}</td>
											                <td>{{$dat->Prestasi}}</td>
                                      <td>{{$dat->Tanggal->format('d-m-Y')}}</td>
                                      <td>{{$dat->Keterangan}}</td>
                                      <td>

									      	              <a href='{{url("/admin/vAchievementMhs/update/{$dat->ID}")}}' class="label label-success"><i class="glyphicon glyphicon-edit"></i> Update </a> &nbsp;
									      	              <a href='{{url("/admin/vAchievementMhs/delete/{$dat->ID}")}}'  class="label label-danger"><i class="glyphicon glyphicon-trash"></i> Delete </a>
									                    </td>
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
@include('inc.footer1')
