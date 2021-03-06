@if(Session::has('message'))
    <p class="alert alert-success">{{ Session::get('message') }}</p>
@endif
<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title btn btn-success">Update Milestone</h3>
    </div>
    <form class="form-horizontal update-milestone" action="{{ route('milestone.update', ['milestone' => $milestones->id]) }}"  method="POST">
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="box-body">
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Title</label>
                <div class="col-sm-10">
                    <input type="text" name="title" class="form-control"   value="{!! $milestones->title!!}" id="inputEmail3" placeholder="Title" >
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Description</label>
                <div class="col-sm-10">
                    <textarea type="text" name="description" class="form-control"   value="{!! $milestones->description !!}" id="inputPassword3" placeholder="Description"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Milestone Status</label>
                <div class="col-sm-10">
                    <select name="milestone_status"  class="form-control" id="status" value="">
                        <option value="{!!$milestones->milestone_status !!}">{!! $milestones->milestone_status !!}</option>
                        <option value="Upcoming">Upcoming</option>
                        <option value="Active">Active</option>
                        <option value="Completed">Completed</option>
                        </select>
                </div>
            </div>
            <div class="form-group">
                <label for="due-date" class="col-sm-2 control-label">Start date</label>
                <div class="col-sm-10">
                    <input type="date" name="start_date" class="form-control" value="{!! $milestones->start_date!!}" id="due-date">
                </div>
            </div>
            <div class="form-group">
                <label for="due-date" class="col-sm-2 control-label">End date</label>
                <div class="col-sm-10">
                    <input type="date" name="end_date" class="form-control" id="due-date" value="{!! $milestones->end_date!!}">
                </div>
            </div>
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-default">Cancel</button>
            <button type="submit" class="btn btn-info pull-right">Update</button>
        </div>
    </form>
</div>
