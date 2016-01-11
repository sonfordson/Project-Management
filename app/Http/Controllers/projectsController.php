<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Project;
use App\Team;
use App\Feature;
use Input;
use Auth;
use Carbon\Carbon;
class projectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();

         //=  Project::first()->teams()->get();

        return view('project.index')->withProjects($projects);
    }

    /**
     * Show the form for creating a new resource.et
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('project.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $project = new Project;
        $project->title                       = Input::get('title');
        $project->description                 = Input::get('description');
        $project->project_status              = Input::get('project_status');
        $project->architecture                = Input::get('architecture');
        $project->platforms                   = Input::get('platforms');
        $project->non_functional_requirements = Input::get('non_functional_requirements');
        $project->due_date                    = Carbon::now();
        $project->user_id                     = 1;
        //dd($project);
        $project->save();

        return redirect()->route('project.index')->with('info','Your Project has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $projects = Project::findOrFail($id);

         //=  Project::first()->teams()->get();

        return view('project.show',compact('projects',$projects));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $projects = Project::find($id);

        //=  Project::first()->teams()->get();

        return view('project.edit',compact('projects',$projects));
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
        $project = Project::find($id);
        $project->title                       = Input::get('title');
        $project->description                 = Input::get('description');
        $project->project_status              = Input::get('project_status');
        $project->architecture                = Input::get('architecture');
        $project->platforms                   = Input::get('platforms');
        $project->non_functional_requirements = Input::get('non_functional_requirements');
        $project->due_date                    = Carbon::now();
        $project->user_id                     = 1;
        //dd($project);
        $project->save();

        Session::flash('message', 'Successfully updated nerd!');
        return redirect()->route('project.index');
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
