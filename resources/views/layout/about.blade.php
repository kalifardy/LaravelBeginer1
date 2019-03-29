
@extends('layout.index')
@section('content')

Nama : {{ $nama }}<br/>
Asal : {{ $asal }}<br/>
tgl lahir : {{ $tanggal }}<br/>
<br/>
======= Italic Dan Bold =======<br/>
<br/>
Nama : {!! $nama !!} <br/>
Asal : {!! $asal !!}<br/>
tgl lahir : {!!$tanggal !!}<br/>

@stop
