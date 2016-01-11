<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title btn btn-success">Milestones</h3>
    </div>
    <div class="box-body">
        <table class="table table-bordered">
            <tbody>
            <tr>
                <th style="width: 10px">#</th>
                <th>Milestone Title</th>
                <th>Milestone</th>
                <th>Status</th>
                <th>Start Date</th>
                <th>Action</th>
            </tr>
            @foreach($milestones as $milestone)

                <tr>
                    <td>{{ $milestone->id }}</td>

                    <td><a href="/milestone/{{ $milestone->id }}">{{ $milestone->title }}</a></td>
                    <td>{{ $milestone->description }}</td>
                    <td>{{ $milestone->milestone_status }}</td>
                    <td>{{ $milestone->start_date }}</td>

                    <td><div class="btn-group">
                            <button type="button" class="btn btn-warning btn-flat">Action</button>
                            <button type="button" class="btn btn-warning btn-flat dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="milestone/{{ $milestone->id }}/edit">Edit</a></li>
                                <li><a href="milestone/{{ $milestone->id }}">Delete</a></li>
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