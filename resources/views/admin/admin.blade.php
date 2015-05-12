@extends('layouts.layout')
<?php $page = 'admin'; ?>
@section('content')
<div class="content">
    <h2>Admin</h2>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="row">
                <div class="col-md-4">
                    <div class="admin-icon"><a href="<?php echo URL::to('/admin/upload'); ?>"><span class="glyphicon glyphicon-upload"></span></a></div>
                    <div class="center">{!! HTML::link('/admin/upload', 'upload an image', array('class' => 'center')) !!}</div>
                </div>
                <div class="col-md-4">
                    <div class="admin-icon"><a href="<?php echo URL::to('/admin/select'); ?>"><span class="glyphicon glyphicon-pencil"></span></a></div>
                    <div class="center">{!! HTML::link('/admin/select', 'edit an image', array('class' => 'center')) !!}</div>

                </div>
                <div class="col-md-4">
                    <div class="admin-icon"><a href="<?php echo URL::to('/admin/select'); ?>"><span class="glyphicon glyphicon-trash"></span></a></div>
                    <div class="center">{!! HTML::link('/admin/select', 'delete an image', array('class' => 'center')) !!}</div>

                </div>
            </div>
        </div>


    </div>
</div><!-- content -->
@endsection
