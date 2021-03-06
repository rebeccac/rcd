@extends('layouts.layout')
<?php $page = 'select'; ?>
@section('content')
<div class="content">
    <h2>Edit or delete an image</h2>

    @if(Session::has('message'))
        <p class="alert alert-info">{{ Session::get('message') }}</p>
    @endif
    
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <ul>
                @foreach($photos as $photo)
                    <li class="edit-image">
                        <img src="{{asset('images/'.$photo->url)}}" alt="{{$photo->alt}}" width="100">
                        <div class="icons">
                            <a href="{{ URL::to('photos/'.$photo->id.'/edit/') }}"><span class="glyphicon glyphicon-pencil"></span></a>

                            {!! Form::open(['method' => 'DELETE', 'route' => ['photos.destroy', $photo->id], 'class'=>'delete-record']) !!}

                            <button type="submit" class="icon-button delete-button" onclick="if(!confirm('Are you sure you want to delete this item?')){return false;};">
                                <span class="glyphicon glyphicon-trash"></span>
                            </button>
                            {!! Form::close() !!}
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div><!-- content -->
@endsection
