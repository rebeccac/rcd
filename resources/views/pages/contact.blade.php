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
        <div class=" col-xs-12 col-md-9">
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
        <div class=" col-xs-12 col-md-3">
            <div class="contact-icon col-xs-4 col-md-12 text-center-xs text-left-md">
                <i class="fa fa-twitter"></i> <div class="hidden-xs inline-block">Twitter</div>
            </div>
            <div class="contact-icon col-xs-4 col-md-12 text-center-xs text-left-md">
                <i class="fa fa-facebook"></i> <div class="hidden-xs inline-block">Facebook</div>
            </div>
            <div class="contact-icon col-xs-4 col-md-12 text-center-xs text-left-md">
                <img src="{{asset('images/etsy-icon-grey.png')}}" alt="Etsy icon" width="32px"> <div class="hidden-xs inline-block">Etsy</div>
            </div>
            <div class="contact-icon col-xs-4 col-md-12 text-center-xs text-left-md">
                <i class="fa fa-instagram"></i> <div class="hidden-xs inline-block">Instagram</div>
            </div>
            <div class="contact-icon col-xs-4 col-md-12 text-center-xs text-left-md">
                <i class="fa fa-pinterest"></i> <div class="hidden-xs inline-block">Pinterest</div>
            </div>

        </div><!-- col-xs-12 col-md-3 -->
    </div><!-- row -->
</div><!-- content -->

@endsection
