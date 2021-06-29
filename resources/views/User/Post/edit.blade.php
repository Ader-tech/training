@extends('Layouts.master')
@section('title', 'user-dashboard')

@section('content')
	
	<div style="margin-top:150px;">
		
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					@include('includes.sidebar')
				</div>

				{{-- <div class="col-md-1"></div> --}}

				<div class="col-md-8">
					<div class="card">
						<div class="card-header">
							<h4 class="float-start">Edit Post</h4>
								
						</div>


						<div class="card-body">
							<form method="POST" action="">
								<div class="mb-3">
									<label><h5>Post Title</h5></label>
									<input type="text" name="" class="form-control rounded-pill" value="">
								</div>

								<div class="mb-3">
									<label><h5>Post Body</h5></label>
									<input type="text" name="" class="form-control rounded-pill" value="">
								</div>

								<div class="mb-3">
									<label><h5>Image</h5></label>
									<input type="file" name="" class="form-control rounded-pill" value="">
								</div>

								<div class="mb-3">
									<button class="btn btn-outline-secondary">Edit Post</button>
								</div>

								
						</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>

@endsection