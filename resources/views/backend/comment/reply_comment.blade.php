@extends('admin.admin_dashboard')
@section('admin')
<!-- partial -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


<div class="page-content">


      <!-- left wrapper end -->
      <!-- middle wrapper start -->
      <div class="col-md-8 col-xl-8 middle-wrapper">
        <div class="row">
            <div class="card">
              <div class="card-body">

                                <h6 class="card-title" style="mb-10">Reply Comment</h6>

                                <form method="POST" action="{{route('reply.message')}}"
                                class="forms-sample" enctype="multipart/form-data">
                                    @csrf

<input type="hidden" name="id" value="{{ $comment->id }}">
<input type="hidden" name="user_id" value="{{ $comment->user_id }}">
<input type="hidden" name="post_id" value="{{ $comment->post_id }}">




                                            <div class="mb-3, mt-5">
                                                <label for="exampleInputUsername1" class="form-label">User Name: </label>
                                                <code>{{ $comment['user']['name'] }}</code>

                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleInputPassword1" class="form-label">Post Title: </label>
                                                    <code>{{ $comment['post']['post_title'] }}</code>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleInputPassword1" class="form-label">Subject: </label>
                                                    <code> {{ $comment->subject }}</code>

                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleInputPassword1" class="form-label">Message : </label>
                                                    <code> {{ $comment->message }}</code>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="exampleInputPassword1" class="form-label"> Subject</label>
                                                    <input type="text" name="subject" placeholder="Enter Subject" class="form-control" id="subject" >
                                                </div>
                                                 <div class="mb-3">
                                                    <label for="exampleInputPassword1" class="form-label">Message</label>
                                                    <input type="text" name="message" placeholder="Enter Message" class="form-control" id="message" >
                                                </div>



<div class="mt-4">


                                    <button type="submit" class="btn btn-primary me-2">Reply Comment`</button>
</div>


@endsection
{{-- <script type="text/javascript">
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



    </script> --}}
