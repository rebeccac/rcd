<?php
$message = Input::get ('message');
$name = Input::get('name');
$email = Input::get('email');
?>


You received a message from rebeccacordingleydesigns.com:

<p>
Name: {{ $name }}
</p>

<p>
Email: {{ $email}}
</p>

<p>
Message: {{ $message }}
</p>
