<?php

namespace Sonford\Http\Controllers;

use Illuminate\Http\Request;

use Sonford\Http\Requests;
use Sonford\Project;
use Sonford\Team;
use Sonford\Milestone;
use Input;
use Session;
use Redirect;
use Sonford\Http\Controllers\Controller;

class teamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::all();

        return view('team.index', compact('teams',$teams));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $team = new Team();
        $team->name                  = Input::get('name');
        $team->roles                 = Input::get('roles');
        $team->project_id            = 1;
        $team->user_id               = 1;
       
        //dd($milestone);
        $team->save();
        Session::flash('message', 'Successfully Added New Team!');
        return Redirect::back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {

      $teams = Team::findOrFail($id);

        //=  Project::first()->teams()->get();

        return view('team.show', compact('teams', $teams));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teams = Team::find($id);

        return view('team.edit', compact('teams', $teams));
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



        $teams = Team::find($id);
        $teams->name = Input::get('name');
        $teams->roles = Input::get('roles');
        $teams->project_id = 1;
        $teams->user_id = 1;
        // dd($project);
        $teams->save();

        Session::flash('message', 'Successfully updated Team!');
        return Redirect::back();

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
