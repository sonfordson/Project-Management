<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title btn btn-success">Teams</h3>
    </div>
    <div class="box-body">
        <table class="table table-bordered">
            <tbody>
            <tr>
                <th style="width: 10px">#</th>
                <th>Team Title</th>
                <th>Role</th>
                <th>Created</th>
                <th>Action</th>
            </tr>
            @foreach($teams as $team)
                <tr>
                    <td>{{$team->id}}</td>
                    <td><a href="/team/{{ $team->id }}">{{ $team->name }}</a></td>
                    <td>{{ $team->roles }}</td>
                    <td>{{ $team->created_at }}</td>
                    <td><div class="btn-group">
                            <button type="button" class="btn btn-warning btn-flat">Action</button>
                            <button type="button" class="btn btn-warning btn-flat dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="team/{{$team->id}}/edit">Edit</a></li>
                                <li><a href="team/{{ $team->id }}">Delete</a></li>
                            </ul>
                        </div>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="box-footer clearfix">
        <ul class="pagination pagination-sm no-margin pull-right">
            <li><a href="#">«</a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">»</a></li>
        </ul>
    </div>
</div>