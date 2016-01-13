
<form class="form-horizontal delete-project" action="{{ route('project.destroy',$project->id) }}"  method="POST">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
 <button type="submit" class="btn btn-danger pull-right">Delete</button>

</form>

