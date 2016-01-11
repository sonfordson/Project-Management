<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title btn btn-success">Projects</h3>
    </div>
    <div class="box-body">
        <table class="table table-bordered">
            <tbody>
            <tr>
                <th style="width: 10px">#</th>
                <th>Team Title</th>
                <th>Role</th>
               <th>Created</th>
            </tr>
            @foreach($teams as $team)
                <tr>
                    <td>{{$team->id}}</td>
                    <td><a href="#">{{ $team->name }}</a></td>
                    <td>{{ $team->roles }}</td>
                    <td>{{ $team->created_at }}</td>

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