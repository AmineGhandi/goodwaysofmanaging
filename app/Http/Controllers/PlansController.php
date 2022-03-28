<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plans;
use DB;
class PlansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->isMethod('get') && isset($_GET['Processus_concerne'])){
            if($_GET['Processus_concerne'] != 'all'){
                $plans = DB::table('plans')->where('Processus_concerne', $_GET['Processus_concerne'])->get();
                $Processus_concerne=$_GET['Processus_concerne'];
            }else{
                $Processus_concerne='all';
                $posts = Plans::all();
            }
        }else{
            $Processus_concerne='all';
            $plans = Plans::all();
        }
        return view('plans.index',compact('plans','Processus_concerne'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('plans.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this ->validate($request , [
            'Processus_concerne' => 'required',
            'action'=>'required',
            'date_devaluation' => 'required',
            'date_decheance' => 'required',
            'etat' => 'required',
            'realise' => 'required',
            'effictue' => 'required',

        ]);
        plans::create($request->all());
        return redirect()->route('plans.index') ->with('success','Plan created success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( $id )
    {

        $plans = Plans::find($id); 
        return view('Plans.show',compact('plans'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $plan = Plans::find($id);
        return view('plans.edit',compact('plans'));
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
        $this -> validate($request,[
            'Processus_concerne' => 'required',
            'action'=>'required',
            'date_devaluation' => 'required',
            'date_decheance' => 'required',
            'etat' => 'required',
            'realise' => 'required',
            'effictue' => 'required',
        ]); 

        Plans::find($id)-> update($request ->all());
        
        return redirect()-> route('Plans.index') -> with('success','Plan update success');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Plans::find($id)->delete();
        return redirect()->route('Plans.index') -> with('success','Plan deleted success');
    }

   
      
}
