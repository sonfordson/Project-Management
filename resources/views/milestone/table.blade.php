<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title btn btn-success">Projects</h3>
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
                <th>Due Date</th>
            </tr>
            @foreach($milestones as $milestone)

                <tr>
                    <td>{{ $milestone->id }}</td>
                    <td><a href="#">{{ $milestone->title }}</a></td>
                    <td>{{ $milestone->description }}</td>
                    <td>{{ $milestone->milestone_status }}</td>
                    <td>{{ $milestone->start_date }}</td>
                    <td>{{ $milestone->end_date }}</td>
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