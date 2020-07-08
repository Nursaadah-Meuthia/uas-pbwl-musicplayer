@extends('layouts.app')

@section('content')

<div class="container">
	<center><h3>Edit Data Played</h3></center>
	<center>Kembali :<a href="{{ url('played') }}"> Back</a></center>
	<form action="{{url('/played/'.$row->played_id)}}" method="POST">
	<input name="_method" type="hidden" value="PATCH">
	@csrf

	<table table width="400px" border="2" cellpadding="10" cellspacing="10" bgcolor="#5F9EA0" align="center">
		<tr>
			<td> ID ARTIST </td>
			<td><input type="text" name="artist_id" value="{{$row->artist_id}}"></td>
		</tr>
		<tr>
			<td> ID ALBUM </td>
			<td><input type="text" name="album_id" value="{{$row->album_id}}"></td>
		</tr>
		<tr>
			<td> ID TRACK </td>
			<td><input type="text" name="track_id" value="{{$row->track_id}}"></td>
		</tr>
		<tr>
			<td> PLAYED </td>
			<td><input type="text" name="played" value="{{$row->played}}"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="UPDATE"></td>
		</tr>
	</table>
</form>
</div>

@endsection