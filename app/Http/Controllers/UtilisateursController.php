<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Utilisateurs;
use App\Http\Requests\UtilisateursRequest;

class UtilisateursController extends Controller
{

    protected $utilisateurs;


    function __construct(Utilisateurs $utilisateur) {
        $this->utilisateur = $utilisateur;
    }
    /**
     * Display a listing of the resource.
     *
     * 
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $utilisateurs = Utilisateurs::latest()->paginate(5);
		return view('utilisateur.liste',compact('utilisateurs'))->with('i', (request()->input('page', 1) - 1) * 4);
    }

    /**
     * Show the form for creating a new resource.
	 * */
    
    public function create()
	{
		return view('utilisateur.ajouter');
	}

	/**
	* Store a newly created resource in storage.
	*
	*/

	public function store(UtilisateursRequest $request)
	{

		 $this->utilisateur->nom=$request->nom;
		 $this->utilisateur->prenom=$request->prenom;
		 $this->utilisateur->email=$request->email;

		 $this->utilisateur->save();

		 return redirect('utilisateurs')->with('success','Enrégistrement réussi');


	}

	/**
	* Display the specified resource.
	*
	* */

	public function show(Utilisateurs $Utilisateurs)
	{
		return view('Utilisateurssss.show',compact('Utilisateurs'));
	}

	/**
	* Show the form for editing the specified resource.
	*
	* @param int $id
	* @return \Illuminate\Http\Response
	*/
	
	public function edit($id)
	{

$utilisateur = Utilisateurs::find($id);
return view('utilisateur.modifier', compact("utilisateur"));
		// $where = array('id' => $id);
		// $Utilisateurs = Utilisateurs::where($where)->first();
		// return Response::json($Utilisateurs);
	}

	/**
	* Update the specified resource in storage.
	*
	* @param \Illuminate\Http\Request $request
	* @param int $id
	* @return \Illuminate\Http\Response
	*/

	public function update(Request $request)
	{

	}

	/**
	* Remove the specified resource from storage.
	*
	* @param int $id
	* @return \Illuminate\Http\Response
	*/

	public function destroy($id)
	{
		$cust = Utilisateurs::where('id',$id)->delete();
		return Response::json($cust);
	}
}