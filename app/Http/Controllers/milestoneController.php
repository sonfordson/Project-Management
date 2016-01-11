<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Project;
use App\Milestone;
use App\Team;
use Input;
use Carbon\Carbon;
use App\Http\Controllers\Controller;

class milestoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $milestones = Milestone::all();
       // dd($milestone);
        return view('milestone.index', compact('milestones', $milestones));
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
        $milestone = new Milestone();
        $milestone->title                       = Input::get('title');
        $milestone->description                 = Input::get('description');
        $milestone->milestone_status            = Input::get('milestone_status');
        $milestone->project_id                  = 1;
        $milestone->start_date                  = Carbon::now();
        $milestone->end_date                    =  Carbon::now();

        //dd($milestone);
        $milestone->save();

        return redirect()->route('milestone.index')->with('info','Your Project has been created successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $milestones = Milestone::findOrFail($id);

        //=  Project::first()->teams()->get();

        return view('milestone.show', compact('milestones', $milestones));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $milestones = Milestone::find($id);

        return view('milestone.edit', compact('milestones', $milestones));
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
