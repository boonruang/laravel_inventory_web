@extends('admin.admin_master')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="page-content">
<div class="container-fluid">

<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-body">

        <h4 class="card-title">Update Multi Image</h4><br>
        

        <form method="post" action="{{route('update.multi.image')}}" enctype="multipart/form-data">
            @csrf

        <input type="hidden" name="id" value="{{$MultiImage->id}}">            

        <div class="row mb-3">
            <label for="example-text-input" class="col-sm-2 col-form-label">About Multi Image</label>
            <div class="col-sm-10">
                <input name="multi_image" class="form-control" type="file" id="image">
            </div>
        </div>   
        
        
        <div class="row mb-3">
            <label for="example-text-input" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
                <img id="showImage" class="rounded" style="width:200px" src="{{asset($MultiImage->multi_image)}}" alt="Card image cap">
            </div>
        </div>      

        
        <input type="submit" class="btn btn-info waves-effect waves-light" value="Update Multi Image">

    </form>
    <!-- end row -->

    </div>
    </div>
</div> <!-- end col -->
</div>

</div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>

@endsection