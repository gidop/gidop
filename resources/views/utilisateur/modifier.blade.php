@extends('template.prive')
@section('content')



<div class="container-xl">

	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Gestion <b> des Utilisateurs</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="{{Route('utilisateurs.create')}}" class="btn btn-success" ><i class="material-icons">&#xE147;</i> <span>Ajouter New Utilisateur</span></a>
						<a href="{{Route('utilisateurs.index')}}" class="btn btn-info" ><i class="material-icons">list</i> <span>Liste </span></a>						
					</div>
				</div>
			</div>
			<form method="POST" action="{{ route('utilisateurs.update',$utilisateur->id) }}">
			{{ method_field('PUT')}}
       		{{ csrf_field() }}
				
								
					<div class="form-group">
						<label>Nom </label>
						<input type="text" class="form-control"  name="nom" value="{{$utilisateur->nom}}">
					</div>
					
                            <small class="text-danger">{{ $errors->first('nom',':message') }}</small>
					<div class="form-group">
						<label>Prénom </label>
						<input type="text" class="form-control" name="prenom"  value="{{$utilisateur->prenom}}">
					</div>
					
                            <small class="text-danger">{{ $errors->first('prenom',':message') }}</small>
					<div class="form-group">
						<label>Email </label>
						<input type="email" class="form-control" name="email"  value="{{$utilisateur->email}}">
					</div>
					
                            <small class="text-danger">{{ $errors->first('email',':message') }}</small>
					
					<div class="form-group">
						<label>Télehone</label>
						<input type="text" class="form-control" name="phone"  value="{{$utilisateur->phone}}">
					</div>					
				
				<div class="footer">
					<input type="button" class="btn btn-default" data-dismiss="modals" value="Cancel">
					<input type="submit" class="btn btn-success" @click="sendNewMessage" value="Ajouter">
				</div>
			</form>
	</div>	</div>
	</div>			
@endsection