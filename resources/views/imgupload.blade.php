@include('inc.header');
<!-- page content -->

     <form action="store" method="post" enctype="multipart/form-data">
      <label for="image">image</label><br>
      <input type="file" name="image">
      <input type="hidden" name="_token" value="{{csrf_token()}}">
      <input type="submit" name="submit" value="submit">
       
     </form>
        <!-- /page content -->
@include('inc.footer');
