<footer class="footer">
    <p class="copyright">Rebecca Cordingley &copy; {{ date('Y') }}
        <?php if (Auth::check())
    { ?>
        | {!! HTML::link('/admin', 'Admin Panel', array('class' => 'linkid')) !!} | {!! HTML::link('auth/logout', 'Logout', array('class' => 'linkid')) !!}

    <?php } ?></p>
</footer>

<!-- Scripts -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script src="{{ asset('/js/rollover.jquery.js') }}"></script>
<script src="{{ asset('/js/scripts.js') }}"></script>
<script src="{{ asset('/js/menu_jquery.js') }}"></script>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-543e57250f8eea8c" async="async"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
