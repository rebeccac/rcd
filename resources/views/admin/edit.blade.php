@extends('layouts.layout')
<?php $page = 'edit'; ?>
@section('content')
<div class="content">
    <h2>Edit an image</h2>

    {!! Form::model($photo, ['method' => 'PATCH', 'route' => ['photos.update', $photo->id]]) !!}
            
    {!! Form::close() !!}
</div><!-- content -->
@endsection
