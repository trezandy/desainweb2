@extends('layouts.master')

@section('content')
{{ $post->body }}
<p class="small">Dibuat pada tanggal : {{ $post->created_at }}</p>
@endsection
