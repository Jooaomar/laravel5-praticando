@extends('layouts.app')
 
@section('content')
    <div >
        <p>Hello</p>
        <button type="button" class="btn btn-primary">Primary</button>
        <div id="example">
            <Example/>
        </div>
        @foreach ($lista as $key => $value)
            <p>{{ $key }} - {{ $value }}</p>
        @endforeach
    </div>
@endsection