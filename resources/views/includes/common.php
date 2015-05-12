<?php
// check if current page matches var and add active class to current menu item

function addActive($title, $page) {
    return $class = ($page == $title) ? 'class="active"' : '';
}
$active_index = addActive('index', $page);
$active_about = addActive('about', $page);
$active_contact = addActive('contact', $page);
$active_gallery = addActive('gallery', $page);


?>
