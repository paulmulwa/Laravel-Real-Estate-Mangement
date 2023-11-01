@extends('admin.admin_dashboard')
@section('admin')
<div class="page-content">

				<nav class="page-breadcrumb">
					<ol class="breadcrumb">
                <a href= {{route('add.post')}} class= "btn btn-inverse-info">Add Posts</a>



					</ol>
				</nav>

				<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">All Posts</h6>
                <div class="table-responsive">
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>SI</th>
                        <th>Post Title</th>
                        <th>Category</th>
                        <th>Post Image</th>
                        <th>Action</th>
                        {{-- <th>Start date</th>
                        <th>Salary</th> --}}
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($post as $key => $item)
                      <tr>
                        <td>{{$key+1}}</td>
                        <td>{{ $item->post_title}}</td>
                         <td>{{ $item['cat']['category_name']}}</td> 
                            <td> <img src="{{ asset($item->post_image) }}"
                         style="width: 70px; height:40px;"></td>
                            {{-- </tr> --}}
                            <td>    
    <a href="{{ route('edit.post',$item->id) }}"class= "btn btn-inverse-warning"title="edit"><i data-feather="edit"></i></a>

  <a href="{{ route('delete.post',$item->id) }}" class= "btn btn-inverse-danger" id="delete"><i data-feather="trash-2"></i></a>



                        </td>

                      </tr>
                      @endforeach

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
					</div>
				</div>

			</div>
@endsection
