<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title btn btn-success">Update Team</h3>
    </div>
    <form class="form-horizontal" action="{{ route('team.update', ['team' => $teams->id]) }}"  method="POST">
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="box-body">

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Title</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="Title" value="{!! $teams->name!!}">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Description</label>
                <div class="col-sm-10">
                    <textarea type="text" name="roles" class="form-control" id="inputPassword3" placeholder="Description" value="{!! $teams->roles!!}"></textarea>
                </div>
            </div>

        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-default">Cancel</button>
            <button type="submit" class="btn btn-info pull-right">Create</button>
        </div>
    </form>
</div>
<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 1/11/16
 * Time: 6:16 PM
 */