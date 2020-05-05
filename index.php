<?php

$date = new DateTimeImmutable();

file_put_contents(sprintf('/data/POST_%s.json', $date->format('c')), json_encode($_POST));
file_put_contents(sprintf('/data/GET_%s.json', $date->format('c')), json_encode($_GET));
if ($_FILES) {
    mkdir(sprintf('/data/files_%s', $date->format('c')));
}
foreach($_FILES as $file) {
    move_uploaded_file($file['tmp_name'], sprintf('/data/files_%s/%s', $date->format('c'), $file['name']));
}

header('HTTP/1.1 204 No Content');
