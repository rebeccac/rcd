@extends('layouts.layout')
<?php $page = 'upload'; ?>
@section('content')
<div class="content">
    <h2>Upload an image</h2>
<div class="about-section">
   <div class="text-content">
     <div class="span7 offset1">
        @if(Session::has('success'))
          <?php $file = Session::get('filename'); ?>
          <div class="alert-box success">
          <h2>Your image has been uploaded</h2>
          <img src="{{asset('images/'.$file)}}">
          </div>
        @endif

        <!-- FORM -->
        {!! Form::open(array('url'=>'admin/upload','method'=>'POST', 'files'=>true)) !!}
        <!-- ERRORS -->
        <ul>
            @foreach($errors->all() as $error)
                <li class="red number-dotpoints errors">{{$error}}</li>
            @endforeach
        </ul>
         <div class="control-group">
          <div class="controls">
              <div class="form-group">
                  {!! Form::label('title', 'Title') !!}
                  {!! Form::text('title', null,
                    array('required',
                            'class'=>'form-control',
                            'placeholder'=>'Title')) !!}
              </div>
              <div class="form-group">
                  {!! Form::label('alt', 'Alt description') !!}
                  {!! Form::text('alt', null,
                    array('required',
                            'class'=>'form-control',
                            'placeholder'=>'Alt description')) !!}
              </div>

              <div class="form-group">
                  {!! Form::label('description', 'Text description') !!}
                  {!! Form::text('description', null,
                    array('required',
                            'class'=>'form-control',
                            'placeholder'=>'Text description')) !!}
              </div>


              <div class="form-group">
                  {!! Form::label('image', 'Select an image to upload') !!}
                  {!! Form::file('image', array ('required')) !!}
              </div>

        </div>
        </div>
        <div id="success"> </div>
      {!! Form::submit('Submit', array('class'=>'submit')) !!}
      {!! Form::close() !!}


      </div>
   </div>
</div>
</div><!-- content -->
@endsection
