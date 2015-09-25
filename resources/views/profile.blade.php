@extends('master')

@section('konten')
        <div class="container">
            <div class="content">
                <div class="title">{{$data['nama']}}</div>
                <div>{{$data['email']}}</div>
            </div>
        </div>
  @stop