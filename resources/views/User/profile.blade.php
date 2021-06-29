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
							<h4 class="float-start">My Profile</h4>
								<a href="/edit-profile">
									<button class="btn btn-danger btn-sm float-end"><i class="fa fa-edit"></i>Edit Profile</button>
								</a>
						</div>


						<div class="card-body">
							<form method="POST" action="">
								<div class="mb-3">
									<label><h5>Name</h5></label>
									<input type="text" name="" class="form-control rounded-pill" value="Ronke" disabled>
								</div>

								<div class="mb-3">
									<label><h5>Username</h5></label>
									<input type="text" name="" class="form-control rounded-pill" value="Ronke123" disabled>
								</div>

								<div class="mb-3">
									<label><h5>Email</h5></label>
									<input type="email" name="" class="form-control rounded-pill" value="Ronke123@larvel.com" disabled>
								</div>

								
						</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>

@endsection