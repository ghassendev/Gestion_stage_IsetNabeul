<?php

namespace App\Http\Controllers;

use DB;
use App\User;
use App\Rapport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

class RapportsController extends Controller
{

    
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        if (auth()->user()->email==='chef@chef.com'){
            return view('home_chef');
        }
        if (auth()->user()->email==='admin@admin.com'){
            return view('home_admin');
        }

       
                $user_id=auth()->user()->id;
                
                $rapport=Rapport::where('user_id',$user_id)->first();
               
    

        return view('home_etud')->with('rapport',$rapport);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function voir()
    {               
        
        if(auth()->user()->email !=='chef@chef.com'){
            return redirect('/rapport')->with('error', 'Unauthorized Page');
        }

        $rapports=Rapport::all();
            
        return view('voir_rapport')->with('rapports',$rapports);
    }



        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function consulter()
    {               
        if(auth()->user()->email !=='chef@chef.com'){
            return redirect('/rapport')->with('error', 'Unauthorized Page');
        }

        $rapports=Rapport::all();
            
        return view('consulter_rapport')->with('rapports',$rapports);
    }



     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function consulter_dep()
    {               

        if(auth()->user()->email !=='admin@admin.com'){
            return redirect('/rapport')->with('error', 'Unauthorized Page');
        }

        $rapports=Rapport::all();
            
        return view('consulter_rapport_dep')->with('rapports',$rapports);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_etud');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'chemin' => 'required',
            
        ]);
        $default='en attente';
        

        $user_id=auth()->user()->id;
                
                
        $rapports=Rapport::where('user_id',$user_id)->first();
    
        if(count($rapports)===0){

        // Handle File Upload
        if($request->hasFile('chemin')){
            // Get filename with the extension
            $filenameWithExt = $request->file('chemin')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('chemin')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('chemin')->storeAs('public/chemins', $fileNameToStore);
        }
    
        // Create Rapport
        $Rapport = new Rapport;
       
        $Rapport->user_id = auth()->user()->id;
        $Rapport->status = $default;
        $Rapport->note=-1;
        $Rapport->date_soutenance='2000/01/01';
        $Rapport->chemin = $fileNameToStore;
        $Rapport->save();
    
        return redirect('/rapport')->with('success', 'Rapport deposer avec succees ');
    }else{
        return redirect('/rapport')->with('error', 'vous aver droit de deposer un seul Rapport  ');
    }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       // Check for correct user
       if(auth()->user()->email !=='chef@chef.com'){
        return redirect('/rapport')->with('error', 'Unauthorized Page');
    }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rapport = Rapport::find($id);
        
        //Check if rapport exists before deleting
        if (!isset($rapport)){
            return redirect('/rapport')->with('error', 'No Rapport Found');
        }

        // Check for correct user
        if(auth()->user()->email !=='chef@chef.com'){
            return redirect('/rapport')->with('error', 'Unauthorized Page');
        }

        return view('rapport_valid')->with('rapport', $rapport);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            
            
        ]);

         $rapport = Rapport::find($id);

        
        $default='Validee';
        // Create Rapport
        
       
        if(Route::current()->getName() == 'add_date'){
            $rapport->date_soutenance=$request->input('date_soutenance') ;
            $rapport->save();
        }
        if(Route::current()->getName() == 'add_note'){
            $rapport->note=$request->input('note');
           
            $rapport->save();
        }
        $rapport->status=$request->input('status');
        $rapport->note=$request->input('note');
        $rapport->date_soutenance=$request->input('date_soutenance') ;
        $rapport->save();

        return redirect('/rapport/voir')->with('success', 'data envoyer avec succees ');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Check for correct user
        if(auth()->user()->email !=='chef@chef.com'){
            return redirect('/rapport')->with('error', 'Unauthorized Page');
        }
    }
}
