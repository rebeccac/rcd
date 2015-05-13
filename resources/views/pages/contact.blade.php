@extends('layouts.layout')
<?php $page = 'contact'; ?>

@section('content')
<div class="content">
    <h2>Contact Me</h2>

    @if(Session::has('message'))
        <p class="alert alert-info">{{ Session::get('message') }}</p>
    @endif
    
    <p><em>Please don't hestitate to contact me with any questions, comments or requests.</em></p>
    <ul>
        @foreach($errors->all() as $error)
            <li class="red number-dotpoints errors">{{$error}}</li>
        @endforeach
    </ul>
    <div class="row">
        <div class="col-md-9">
            <div class="box">
            {!! Form::open(array('route' => 'contact_store', 'class' => 'form')) !!}

            <div class="form-group">
                {!! Form::label('Your Name') !!}
                {!! Form::text('name', null,
                    array('required',
                          'class'=>'form-control',
                          'placeholder'=>'Your name')) !!}
            </div>

            <div class="form-group">
                {!! Form::label('Your E-mail Address') !!}
                {!! Form::text('email', null,
                    array('required',
                          'class'=>'form-control',
                          'placeholder'=>'Your e-mail address')) !!}
            </div>

            <div class="form-group">
                {!! Form::label('Your Message') !!}
                {!! Form::textarea('message', null,
                    array('required',
                          'class'=>'form-control',
                          'placeholder'=>'Your message')) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Send Message',
                  array('class'=>'submit')) !!}
            </div>
            {!! Form::close() !!}
        </div>
        </div><!-- col-md-9 -->
        <div class="col-md-3">
            <div class="contact-icon">
                <i class="fa fa-twitter"></i> Follow me on Twitter
            </div>
            <div class="contact-icon">
                <i class="fa fa-facebook"></i> Like me on Facebook
            </div>
            <div class="contact-icon">
                <img src="{{asset('images/etsy-icon-grey.png')}}" alt="Etsy icon" width="32px"> Follow me on Etsy
            </div>
            <div class="contact-icon">
                <i class="fa fa-instagram"></i> Follow me on Instagram
            </div>
            <div class="contact-icon">
                <i class="fa fa-pinterest"></i> Follow me on Pinterest
            </div>

        </div><!-- col-md-3 -->
    </div><!-- row -->
</div><!-- content -->

@endsection
