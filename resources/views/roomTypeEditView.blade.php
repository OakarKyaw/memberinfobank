@extends('layoutView')
@section('content')
<form action="{{route('roomTypeCN.update',$roomTypes->roomTypeId)}}" method="post">
	@method('PATCH')
	@csrf
	<div class="form-group">
	<label>
		<h2>RoomName</h2>
	</label><br>
	<input type="text" name="roomTypeDesc" value="{{$roomTypes->roomTypeDesc}}" class="form-control">
   </div>
<br>
    <div class="form-group">
	<label>
		<h2>Active: </h2>
	</label><br>
	<input type="checkbox" name="active" value="{{$roomTypes->active}}" class="form-control">
  </div>
  <br>
  <div class="form-group">
    <label>
    	<h2>Remark :</h2>
    </label><br>
	<textarea name="remark" value="{{$roomTypes->remark}}" class="form-control"></textarea>
</div><br><br>
	<button type='submit'>Update</button>
</form>
@endsection