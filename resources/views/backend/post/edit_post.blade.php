@extends('admin.admin_dashboard')
@section('admin')
<!-- partial -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


<div class="page-content">


      <!-- left wrapper end -->
      <!-- middle wrapper start -->
      <div class="col-md-12 col-xl-12 middle-wrapper">
        <div class="row">
            <div class="card">
              <div class="card-body">

                                <h6 class="card-title" style="mb-10">Edit Post</h6>

                                <form method="POST" action="{{route('update.post')}}"
                                class="forms-sample" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$post->id}}">

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group mb-3">
                                                <label class="form-label">Post Title</label>
                                                <input type="text" value="{{ $post->post_title }}" name="post_title" class="form-control"
                                                    placeholder="Enter Post Title">
                                            </div>
                                        </div><!-- Col -->
                                        <div class="col-sm-6">
                                            <div class="form-group mb-3">
                                                <label class="form-label">Blog Category</label>
                                                <select name="blogcat_id" 
                                                class="form-select"
                                                    id="exampleFormControlSelect1">
                                                    <option selected="" disabled="">Select Category</option>
                                                    @foreach ($blogcat as $cat)
                                                      <option value="{{ $cat->id }}"
                                                        {{ $cat->id == $post->blogcat_id ? 'selected': '' }}>{{ $cat->category_name }}</option>
                                                    @endforeach
    
                                                </select>
                                            </div>
                                        </div>

                                        
                                        <div class="col-sm-12">
                                            <div class="form-group mb-3">
                                                <label label class="form-label">Short Description</label>
                                                    <textarea name="short_descp"  
                                                        class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $post->short_descp}}
                                                    </textarea>
        
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group mb-3">
                                                <label class="form-label">Long Description</label>
                                                <textarea class="form-control" name="long_descp"
                                                 id="tinymceExample" rows="10">{{ $post->long_descp}}</textarea>
                                            </div>
                                        </div>
                                {{-- </div> --}}
                                {{-- <hr> --}}
    
   
                                <div class="col-sm-6">
                                    <div class="form-group mb-3">
                                        <label class="form-label">Post Tags</label>
                                        <input name="post_tags" id="tags"
                                        value="{{$post->post_tags }}"  />
                                        
                                    </div>
                                </div>    
                                       
    

                    <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"> State Photo</label>
             <input type="file" name="post_image" class="form-control" id="image" >
             </div>

                 <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">
                            </label>

                            <img id="showImage" class="wd-100 rounded-circle"
                
                       src="{{ asset($post->post_image) }}" alt="profile">
                                                </div>




<div class="mt-4">


                                    <button type="submit" class="btn btn-primary me-2">Submit</button>
</div>


@endsection
<script type="text/javascript">
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e)
            {
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });

    });



    </script>
