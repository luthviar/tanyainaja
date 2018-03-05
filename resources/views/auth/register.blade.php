@extends('layouts.app')

@section('content')

                

                <div class="container">
                  
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Register</h3>
                            		<p>Haloo {{ $name }}</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-key"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="" method="post" class="login-form">
			                    	{{ csrf_field() }}
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Email</label>
			                        	<input placeholder="Username" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Password</label>
			                        	<input id="password" name ="password" type="password" placeholder="Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
			                        </div>
			                        <button type="submit" class="btn btn-success">Log in</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
                    
                </div>

@endsection