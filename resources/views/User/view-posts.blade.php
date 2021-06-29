@extends('Layouts.master')
@section('title', 'user-dashboard')

@section('content')
	
	<div style="margin-top:150px;">
		
		<div class="container">
			<div class="row mb-4">
				<div class="col-md-3">
					@include('includes.sidebar')
				</div>

				{{-- <div class="col-md-1"></div> --}}

				<div class="col-md-9 mt-3">
					<div class="card">
						<div class="card-header">
							<h4>My Posts</h4>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered table-striped table-hover">
									<thead>
										<tr>
											<th>Post Title</th>
											<th>Post Body</th>
											<th>Post Image</th>
											<th></th>
											<th></th>
										</tr>
									</thead>

									<tbody>
										<tr>
										  <td>Lorem ipsum dolor sit amet consectetur adipiscing</td>
										  <td>Lorem ipsum dolor sit amet consectetur adipiscing</td>
										  <td><img src="{{asset('post.jpg')}}" height="50"></td> 
										  <td><a href="/post/edit">
										  	 <button class="btn btn-success btn-sm">
										  	  <i class="fa fa-edit"></i>Edit
										     </button></a>
										 </td>	

										 <td><a href="/post/delete">
										  	 <button class="btn btn-danger btn-sm">
										  	  <i class="fa fa-trash"></i>delete
										     </button></a>
										 </td>	
										</tr>

										<tr>
										  <td>Lorem ipsum dolor sit amet consectetur adipiscing</td>
										  <td>Lorem ipsum dolor sit amet consectetur adipiscing</td>
										  <td><img src="{{asset('post.jpg')}}" height="50"></td> 
										  <td><a href="/psot/edit">
										  	 <button class="btn btn-success btn-sm">
										  	  <i class="fa fa-edit"></i>Edit
										     </button></a>
										 </td>	

										 <td><a href="/post/delete">
										  	 <button class="btn btn-danger btn-sm">
										  	  <i class="fa fa-trash"></i>delete
										     </button></a>
										 </td>	
										</tr>
										
									</tbody>
								</table>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>

@endsection