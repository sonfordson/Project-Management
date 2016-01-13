<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title btn btn-success">Projects</h3>
    </div>
    <div class="box-body">
        <table class="table table-bordered">
            <tbody>
            <tr>
                <th style="width: 10px">#</th>
                <th>Project Title</th>
                <th>Milestone</th>
                <th>Status</th>
                <th>Due Date</th>
                <th>Action</th>


            </tr>
            @foreach($projects as $project)

                <tr>
                    <td>{{ $project->id }}</td>
                    <td><a href="/project/{{ $project->id }}">{{ $project->title }}</a></td>
                    <td>{{ $project->description }}</td>
                    <td>{{ $project->project_status }}</td>
                    <td>{{ $project->due_date }}</td>
                    <td><div class="btn-group">
                            <button type="button" class="btn btn-warning btn-flat">Action</button>
                            <button type="button" class="btn btn-warning btn-flat dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="project/{{ $project->id }}/edit">Edit</a></li>
                                <li><a href="project/{{ $project->id }}">@include('project.delete',['project'=>$project])</a></li>
                            </ul>
                        </div></td>

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