

<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title btn btn-success">Add New Team</h3>
    </div>
    <form class="form-horizontal"  action="{{ route('team.store') }}" method="post" >
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="box-body">

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="Name">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Description</label>
                <div class="col-sm-10">
                    <input type="text" name="roles" class="form-control" id="inputPassword3" placeholder="Role">
                </div>
            </div>

        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-default">Cancel</button>
            <button type="submit" class="btn btn-info pull-right">Create</button>
        </div>
    </form>
</div>
