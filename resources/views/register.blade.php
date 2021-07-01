@extends('Layouts.master')
@section('title', 'Register')

@section('content')
    <div style="margin-top:100px;">
        
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-6 offset-md-3">
                   <div class="card">
                       <div class="card-header">Register</div>

                       <div class="card-body">
                              <form action = "" target="_blank" method="post" autocomplet="on">

                        <div class="mb-3">
                           <label title = "surname firstname middlename" for="fname">Fullname</label>
                            <input type="text" name="fullname" class="form-control rounded-pill" > 
                        </div>

                        <div class="mb-3">
                            <label for="email">Email</label><br>
                            <input type="email" name="email"  class="form-control rounded-pill">
                        </div>
                

                        <div class="mb-3">
                            <label for="phoneNo">Phone Number</label>
                            <input type="tel" name="number" class="form-control rounded-pill">
                        </div>

                        <div class="mb-3">
                             <label for = "gender">Gender</label>
                             <select  name = "gender" class="form-select rounded-pill">
                                <option value="">Select Gender</option>
                                <option value = "male">Male</option>
                                <option value = "female" >Female</option>
                                <option value = "others">Others</option>
                             </select>
                        </div>
                
                        <div class="mb-3">
                           <label for="DOB">Date of Birth</label>
                           <input type="date" name="birthday" class="form-control rounded-pill"> 
                        </div>

                        <div class="mb-3">
                           <label for="username">Username</label>
                           <input type="text" name="username" class="form-control rounded-pill">
                        </div>

                        <div class="mb-3">
                           <label for="pwd">Password</label>
                            <input type="password" name="password" class="form-control rounded-pill"> 
                        </div>
                
                        <div class="mb-3">
                          <label for="myfile">Upload a file</label>
                          <input type="file" name="document" class="form-control rounded-pill"> 
                        </div>
                        
                        <div class="mb-3">
                            <button class="btn btn-success">Register</button>
                        </div>
            </form>
                       </div>
                   </div>
                </div>
            </div>
        </div>
         
    </div>
@endsection