@extends('layouts.layout')
<?php $page = 'index'; ?>
@section('content')
<div class="content">
    <div class="widget">
        <div class="widget_left">
            <div class="widget_price">$25.00</div>
            <div class="clear"></div>
            <div class="widget_store_link"><a href="https://www.etsy.com/shop/RebeccaCordingley" target="_blank">View more <br> on Etsy</a></div>
        </div>
        <div class="widget_right"></div>
    </div>

    <?php
    echo "<pre>";
    echo $listings['results'][$rand]['title'];
    echo "</pre>";
    echo "<br><br><br><br>";
    ?>
    <img src="<?php echo  $listings['results'][$rand]['MainImage']['url_170x135']; ?>">
</div><!-- content -->
@endsection
