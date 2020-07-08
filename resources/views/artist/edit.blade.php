@extends('layouts.app')

@section('content')

<div class="container">
	<center><h3>Edit Data Artist</h3></center>
	<center> Kembali :<a href="{{ url('artist') }}">Back</a></center>
	<form action="{{url('/artist/'.$row->artist_id)}}" method="POST">
	<input name="_method" type="hidden" value="PATCH">
	@csrf
	
	<table table width="400px" border="2" cellpadding="10" cellspacing="10" bgcolor="#5F9EA0" align="center">
	<tr>
		<td>NAMA</td>
		<td><input type="text" name="artist_name" value="{{$row->artist_name}}"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="UPDATE"></td>
	</tr>
</table>
</form>
</div>

@endsection