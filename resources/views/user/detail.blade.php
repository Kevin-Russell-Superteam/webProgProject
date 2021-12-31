@extends('layouts.user')

@section('container')
{{ $item->name }}
Rp. {{ $item->price }}
{{ $item->type }}
{{ $item->color }}
@endsection