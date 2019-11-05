<?php

namespace App\Http\Controllers;

use App\ExperienciaLaboral;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExperienciaLaboralController extends Controller
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();
        return view('expLaboral.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $exp = ExperienciaLaboral::create($request->all());
            if (auth()->check())
            {
            auth()->user()->expLaborales()->save($exp);
            }
            return back()->with('info', 'Completado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $explaboral = ExperienciaLaboral::findOrfail($id);
        $exp = ExperienciaLaboral::where('idUsuario', $id)->get();
        // DB::table('experiencia_laborals')->where('idUsuario', '=', auth()->id())->get();
         // dd($exp);
        return view('expLaboral.show', compact('explaboral', 'exp'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
