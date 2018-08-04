@extends('layouts.app')

@section('content')
    <h1>Haveランキング</h1>
    @include('items.items', ['items' => $items, 'ranking_of' => $ranking_of])
@endsection