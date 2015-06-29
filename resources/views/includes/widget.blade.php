<div class="widget">
    <div class="widget_left">
        <div class="widget_price">${{$listings['results'][$rand]['price']}}</div>
        <div class="widget_currency">USD</div>
        <div class="clear"></div>
        <div class="widget_store_link">
            <a href="https://www.etsy.com/shop/RebeccaCordingley" target="_blank">View more <br> on Etsy</a></div>
    </div>

    <div class="widget_right">

        <img src="{{  $listings['results'][$rand]['MainImage']['url_170x135']}}" width="170px" height="135px" alt="{{$listings['results'][$rand]['title']}}">

        <div class="widget_description">
            <?php echo $description; ?>
        </div>
        <div class="etsy_badge">
            <a href="//www.etsy.com/shop/RebeccaCordingley?ref=offsite_badges&utm_source=sellers&utm_medium=badges&utm_campaign=en_isell_3"><img height="25" src="//img0.etsystatic.com/site-assets/badges/en/en_isell_3.png"></a>
        </div>
    </div>
</div>
