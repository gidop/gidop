<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Suivi</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('css/style.css')}}" rel="stylesheet">
        <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
       <script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
        <script src="{{asset('js/popper.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>

		@yield('script')


</head>
<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg_menu">

  <a class="navbar-brand" href="#"><img src="{{asset('img/logo_menu.png')}}" class="menu_logo" alt="Logo"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="main_nav">

<ul class="navbar-nav">
<li class="nav-item dropdown">
		<a class="nav-link  dropdown-toggle active" href="#" data-toggle="dropdown">  Administration </a>
	    <ul class="dropdown-menu">
		  <li><a class="dropdown-item" href="#"> Utilisateurs</a></li>
		  <li><a class="dropdown-item" href="#"> Profil </a></li>
		  <li><a class="dropdown-item" href="#"> Role </a></li>
	    </ul>
	</li>
<li class="nav-item dropdown">
		<a class="nav-link  dropdown-toggle nav-item active" href="#" data-toggle="dropdown">  Paramètres </a>
	    <ul class="dropdown-menu">
		  <li><a class="dropdown-item" href="#"> Structure</a></li>
		  <li><a class="dropdown-item" href="#"> Type Structure</a></li>
		  <li class="divider"> </li>
		  <li><a class="dropdown-item" href="#"> Responsable Structure </a></li>
		  <li><a class="dropdown-item" href="#"> Agents </a></li>
		  <li><a class="dropdown-item" href="#"> Departement</a></li>
		  <li><a class="dropdown-item" href="#"> Fonction</a></li>
		  <li><a class="dropdown-item" href="#"> Statut Dossier</a></li>
		  <li><a class="dropdown-item" href="#"> Type des dossiers en conseils</a></li>
		  <li><a class="dropdown-item" href="#"> Instance de répresentation </a></li>
		  

	    </ul>
	</li>
	<li class="nav-item dropdown">
		<a class="nav-link  dropdown-toggle active" href="#" data-toggle="dropdown">  Programme  </a>
	    <ul class="dropdown-menu">
		  <li><a class="dropdown-item" href="#"> Plan de Travail Annuel</a></li>
		  <li><a class="dropdown-item" href="#"> Programme budgetaire </a></li>
		  <li><a class="dropdown-item" href="#"> Activités </a></li>
		  <li><a class="dropdown-item" href="#"> Domaine </a></li>
		  <li><a class="dropdown-item" href="#"> Actions </a></li>
		  <li><a class="dropdown-item" href="#"> Indicateurs </a></li>
		  <li><a class="dropdown-item" href="#"> Lettre de missions </a></li>
		  <li><a class="dropdown-item" href="#"> Priorités lettre de missions </a></li>
		
	    </ul>
	</li>
	

	<li class="nav-item dropdown">
		<a class="nav-link  dropdown-toggle active" href="#" data-toggle="dropdown">  Dossiers  </a>
	    <ul class="dropdown-menu">
	<li  ><a class="dropdown-item" href="#">  Ordinaires </a></li>
	<li class="divider"></li>
	<li  ><a class="dropdown-item" href="#"> Conseils des ministres </a></li>
	<li ><a class="dropdown-item" href="#"> Conseils de cabinet </a></li>
	<!--<li ><a class="dropdown-item" href="#"> Instruction </a></li>
	<li ><a class="dropdown-item" href="#"> Réaction </a></li> -->
	<li><a class="dropdown-item" href="#"> Comptes rendus des instances </a></li>
	
	</ul></li>

	
	<li class="nav-item active"><a class="nav-link" href="#"> Statistique </a></li>
	
</ul>

<ul class="navbar-nav ml-auto">

	<li class="nav-item dropdown">
		<a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown"> Nom Prénom </a>
	    <ul class="dropdown-menu dropdown-menu-right">
		  <li><a class="dropdown-item" href="#">  mon profil</a></li>
		  <li><a class="dropdown-item" href="#">  Deconnextion </a></li>
	    </ul>
	</li>

</ul>

  </div> <!-- navbar-collapse.// -->

</nav>



      
<div class="col-xs-12">
                @if(Session::has('success'))
                    <div class="alert alert-success">{{ Session::get('success') }}</div>
                @endif

                @if(Session::has('error'))
                    <div class="alert alert-danger">{{ Session::get('error') }}</div>
                @endif 
@yield('content')


<!-- Edit Modal HTML -->

</body>
</html>