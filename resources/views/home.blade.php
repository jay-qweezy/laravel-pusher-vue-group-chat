@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            
        </div>
        <div class="col-sm-6">
            <groups :initial-groups="{{ $groups }}" :user="{{ $user }}"></groups>
        </div>
    </div>
</div>
@endsection
