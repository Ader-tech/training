@extends('Layouts.master')
@section('title', 'Login')

@section('content')
    <div style="margin-top:150px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            Login
                        </div>

                        <div class="card-body">
                            <form action = "" target="_blank" autocomplete="on" method="post" >

                                <div class="mb-3">
                                   <label for="username" title="your username">Username</label><br>
                                   <input type="text" name="username"class="form-control rounded-pill">
                                </div>

                                <div class="mb-3">
                                   <label for="password" title="your username">Password</label><br>
                                   <input type="password" name="password" class="form-control rounded-pill">
                                </div>
                

                                <div class="mb-3">
                                    <button class="btn btn-success">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection