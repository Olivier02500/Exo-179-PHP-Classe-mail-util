<?php

include __DIR__ . '/classes/mails.php';

$newmail = new mails('olivier.peuchet02@gmail.com','Hello','welcome to south park');

echo $newmail->sendMail();
