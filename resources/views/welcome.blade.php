@extends('template.public')
@section('script')
<link href="{{asset('css/login.css')}}" rel="stylesheet">
@endsection
@section('content')

<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="{{asset('img/logo.png	')}}" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form action="{{route('utilisateurs.create')}}" method="GET">
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="" class="form-control input_user" value="" placeholder="username">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="" class="form-control input_pass" value="" placeholder="password">
						</div>
						<div class="form-group">
							
						
							
                                <br>
				 	<button type="submit" name="button" class="btn login_btn">Connexion</button>
				   </div>
					</form>
				</div>
		
				
			</div>
		</div>
	</div>
    @endsection