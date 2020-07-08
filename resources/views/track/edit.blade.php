@extends('layouts.app')

@section('content')

<div class="container">
	<center><h3>Edit Data Track</h3></center>
	<center>Kembali :<a href="{{ url('track') }}"> Back</a></center>
	<form action="{{url('/track/'.$row->track_id)}}" method="POST">
	<input name="_method" type="hidden" value="PATCH">
	@csrf

	<table table width="400px" border="2" cellpadding="10" cellspacing="10" bgcolor="#5F9EA0" align="center">
		<tr>
			<td> NAMA TRACK </td>
			<td><input type="text" name="track_name" value="{{$row->track_name}}"></td>
		</tr>
		<tr>
			<td> ID ARTIST </td>
			<td><input type="text" name="artist_id" value="{{$row->artist_id}}"></td>
		</tr>
		<tr>
			<td> ID ALBUM </td>
			<td><input type="text" name="album_id" value="{{$row->album_id}}"></td>
		</tr>
		<tr>
			<td> TIME </td>
			<td><input type="text" name="time" value="{{$row->time}}"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="UPDATE"></td>
		</tr>
	</table>
</form>
</div>

@endsection