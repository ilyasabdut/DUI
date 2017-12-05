@include('inc.header1')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="{{URL::to('/')}}editor.css"></script>
    <script src="{{URL::to('/')}}/Asset/ckeditor/ckeditor.js"></script>
    <link href="editor.css" type="text/css" rel="stylesheet"/>
       <div class="container">
        <div class="row">
            <div class="col-md-10">
               <form class="form-horizontal" method="POST" action="{{url('/admin/vNews/edit',array($data->ID))}}" enctype="multipart/form-data">

                 {{csrf_field()}}

                  <fieldset>

                 <legend>UPDATE NEWS</legend>
                 @if(count($errors) > 0)
                     @foreach($errors->all() as $error)

                         <div class="alert alert-danger">
                             {{$error}}
                         </div>

                     @endforeach
                 @endif

                 <div class="form-group">
                   <div class="col-lg-10">
                     <input type="text" name="Judul" class="form-control" id="inputJudul" value="<?php echo $data->Judul; ?>" placeholder="Judul" >
                   </div>
                 </div>

               <textarea id="editor1" name="Isi" ><?php echo $data->Isi; ?></textarea>
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
                   <input type="text" name="Tag" class="form-control" id="inputTag" value="<?php echo $data->Tag; ?>" placeholder="Tag">
                 </div>
               </div

               

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



@include('inc.footer1');
