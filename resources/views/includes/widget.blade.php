<div class="card">
    <h2 class="front-page-subtitle">REBECCA CORDINGLEY DESIGNS ON ETSY</h2>

    <div class="widget-img">
        <img src="{{  $listings['results'][$rand]['MainImage']['url_570xN']}}" alt="{{$listings['results'][$rand]['title']}}">
    </div>

    <div class="widget-description">
        <?php echo $description; ?>
    </div>

    <div class="widget-bottom-row">
        <div class="widget-bottom-row-left">
            <h3 class="widget-view-more">VIEW MORE<br>ON ETSY</h3>
        </div>
        <div class="widget-bottom-row-right">
            <h3 class="widget-price">USD${{$listings['results'][$rand]['price']}}</h3>
        </div>
    </div>

</div>
