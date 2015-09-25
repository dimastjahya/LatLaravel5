@extends('master')

@section('konten')
Anggota Baru
@if(count($materis))
<ul>
	@foreach($materis as $materi)
	<li>
		 <a href="/laravel/public/materi/{{$materi->id}}"> {{$materi->nama}}</a>
	</li>
</ul>
@endforeach
@endif

  @stop