@extends('master')

@section('konten')
        <div class="container">
        <h2>nama peserta Pertandingan Ninja Konoha</h2>
            <div class="content">
                <div class="title">{{$data['nama']}}</div>
                <div>{{$data['email']}}</div>
            </div>
        </div>
  @stop
