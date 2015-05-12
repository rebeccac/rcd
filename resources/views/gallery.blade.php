@extends('layouts.layout')
<?php $page = 'gallery'; ?>
@section('content')
<div class="content">
    <h2>Admin</h2>

    @foreach($photos as $photo)
        {{$photo->title}}
    @endforeach

</div><!-- content -->
@endsection
