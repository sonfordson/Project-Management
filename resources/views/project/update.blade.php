
    @if(Session::has('message'))
        <p class="alert alert-success">{{ Session::get('message') }}</p>
    @endif

<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title btn btn-success">Update New Project</h3>
    </div>

    <form class="form-horizontal" action="{{ route('project.update', ['project' => $projects->id]) }}"  method="POST">
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="box-body">
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Project Status</label>
                <div class="col-sm-10">
                    <select name="project_status"  class="form-control" id="status" value="">
                        <option value="{!! $projects->project_status !!}">{!! $projects->project_status !!}</option>
                        <option value="Upcoming">Upcoming</option>
                        <option value="Active">Active</option>
                        <option value="Completed">Completed</option>

                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Title</label>
                <div class="col-sm-10">
                    <input type="text" name="title" class="form-control" id="inputEmail3" placeholder="Title" value="{!! $projects->title !!}">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Description</label>
                <div class="col-sm-10">
                    <textarea type="text" name="description" class="form-control" id="inputPassword3" placeholder="Description" value="{!! $projects->description !!}"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Architecture</label>
                <div class="col-sm-10">
                    <input type="text" name="architecture" class="form-control" id="inputEmail3" placeholder="Architecture" value="{!! $projects->architecture!!}">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Non-Fucntional </label>
                <div class="col-sm-10">
                    <input type="text" name="non_functional_requirements" class="form-control" id="inputEmail3" placeholder="Non Functional Requirement"  value="{!! $projects->non_functional_requirements!!}">
                </div>
            </div>
            <div class="form-group">
                <label for="platforms" class="col-sm-2 control-label">Platforms </label>
                <div class="col-sm-10">
                    <input type="text" name="platforms" class="form-control" id="platforms" placeholder="Platforms" value="{!! $projects->platforms !!}">
                </div>
            </div>
            <div class="form-group">
                <label for="due-date" class="col-sm-2 control-label">Due date</label>
                <div class="col-sm-10">
                    <input type="date" name="due-date" class="form-control" id="due-date" value="{!! $projects->due_date !!}">
                </div>
            </div>

        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-default">Cancel</button>
            <button type="submit" class="btn btn-info pull-right">Update</button>
        </div>
    </form>
</div>
