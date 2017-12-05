@include('inc.header1')
<script src="{{URL::to('/')}}/Asset/ckeditor/ckeditor.js"></script>
<div class="table-heading">
	<h2>Education Tables</h2>
</div>

@if(session('info'))
<div class="alert alert-success">
  {{session('info')}}
</div>
@endif
<div class="panel panel-default">
  <div class="panel-heading">
			      	<a href='{{url("/admin/vEducation/create/")}}' class="label label-primary"><i class="glyphicon glyphicon-pencil"></i> Create </a>
                       </div>

                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table id="datatable-responsive" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                    	<th>ID</th>
                                        <th>Judul</th>
                                        <th>Isi</th>
                                        <th width="230px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   	@if(count($data)>0)
				  						@foreach ($data as $data)

									   <tr>
									   		<td>{{$data->ID}}</td>
											<td>{{$data->Judul}}</td>
											<td>{{$data->Isi}}</td>
									      <td>
									      	<a href='{{url("/admin//vEducation/read/{$data->ID}")}}' class="label label-primary"><i class="glyphicon glyphicon-list-alt"></i> Read </a>  &nbsp;
									      	<a href='{{url("/admin//vEducation/update/{$data->ID}")}}' class="label label-success"><i class="glyphicon glyphicon-edit"></i> Update </a>  &nbsp;
									      	<a href='{{url("/admin//vEducation/delete/{$data->ID}")}}'  class="label label-danger"><i class="glyphicon glyphicon-trash"></i> Delete </a>
									      </td>
									    </tr>
									    @endforeach
									  @endif
                                </tbody>
                            </table>

                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>

@include('inc.footer1')
