@extends('template.prive')
@section('script')
<script>
$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});
</script>
@endsection

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
						<a href="#supprimerUtilisateurModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>supprimer</span></a>						
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
						<td>Nom	</td>
						<td>Prénom</td>
						<td>Email</td>
						<td>Date</td>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
				@foreach ($utilisateurs as $utilisateur)
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="utilisateur_id_{{$utilisateur->id}}" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>
						<td>{{$utilisateur->nom}}	</td>
						<td>{{$utilisateur->prenom}}</td>
						<td>{{$utilisateur->email}}</td>
						<td>{{$utilisateur->created_at}}</td><td>
						<form action="{{ route('utilisateurs.edit',$utilisateur->id) }}" method="PUT">
						{{ csrf_field() }}
						<button type="submit" class="btn btn-link"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></button>
							</form></td><td>
							<form action="{{ route('utilisateurs.destroy',$utilisateur->id) }}" method="DELETE">
						{{ csrf_field() }}
							<button type="submit" class="btn btn-link"><i class="material-icons" data-toggle="tooltip" title="supprimer">&#xE872;</i></button>
							</form>
						</td>
						
					</tr>
					@endforeach
					
				</tbody>
			</table>
			<div class="clearfix">
			{!! $utilisateurs->links() !!}
				
			</div>
		</div>
	</div>        
</div>
@endsection