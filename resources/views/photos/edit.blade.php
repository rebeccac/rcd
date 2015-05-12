@extends('layouts.layout')
<?php $page = 'edit'; ?>
@section('content')
<div class="content">
    <h2>Edit an image</h2>

    {!! Form::model($photo, ['method' => 'PATCH', 'route' => ['photos.update', $photo->id]]) !!}
    @include('../partials/_photo_form', ['submit_text' => 'Save changes'])
    {!! Form::close() !!}
</div><!-- content -->
@endsection
