@extends('layoutView')
@section('content')
<form action="{{route('floorCN.update',$floors->floorId)}}" method="post">
	@method('PATCH')
	@csrf

	
	
	<div class="form-group">
	<label>
		<h2>FloorName</h2>
	</label><br>
	<input type="text" name="floorDesc" value="{{$floors->floorDesc}}" class="form-control">
   </div>
<br>
    
    <div class="form-group">
	<label>
		<h2>Active: </h2>
	</label><br>
	<input type="checkbox" name="active" value="{{$floors->active}}" class="form-control">
  </div>
  <br>

  <div class="form-group">
    <label>
    	<h2>Remark :</h2>
    </label><br>
	<textarea name="remark" value="{{$floors->remark}}" class="form-control"></textarea>
</div><br><br>
	
	<button type='submit'>Update</button>
</form>
@endsection