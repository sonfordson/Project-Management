<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Project;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Input;
use Session;
use Redirect;
use Validator;
use Illuminate\View\Middleware\ShareErrorsFromSession;

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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'description' => 'required',
            'project_status ' => 'required',
            'architecture ' => 'required',
            'platforms  ' => 'required',
            'non_functional_requirements' => 'required',
            'due_date' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('/project')
                ->withErrors($validator);
        }

        $project = new Project;
        $project->title                       = Input::get('title');
        $project->description                 = Input::get('description');
        $project->project_status              = Input::get('project_status');
        $project->architecture                = Input::get('architecture');
        $project->platforms                   = Input::get('platforms');
        $project->non_functional_requirements = Input::get('non_functional_requirements');
        $project->due_date                    = Carbon::now();
        $project->user_id                     = 1 ;
        dd($project);
        $project->save();

        Session::flash('message', 'Successfully Added a New Project!');

        return redirect()->route('project.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {

        $projects = Project::findOrFail($id);

        //=  Project::first()->teams()->get();

        return view('project.show', compact('projects', $projects));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $projects = Project::find($id);


        //=  Project::first()->teams()->get();

        return view('project.edit', compact('projects', $projects));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {


        $project = Project::find($id);
        $project->title = Input::get('title');
        $project->description = Input::get('description');
        $project->project_status = Input::get('project_status');
        $project->architecture = Input::get('architecture');
        $project->platforms = Input::get('platforms');
        $project->non_functional_requirements = Input::get('non_functional_requirements');
        $project->due_date = Carbon::now();
        $project->user_id = Auth::user()->id;
       // dd($project);
        $project->save();

        Session::flash('message', 'Successfully updated Project!');
        return Redirect::back();
        //return redirect()->route('project.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Project::find(1);
        return view('project.index');

    }
}
