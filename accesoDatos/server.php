<?php

$file = $_FILES["file"]["name"];

if (!is_dir("../imagenesSubidas/"))
    mkdir("../imagenesSubidas/", 0777);

if ($file && move_uploaded_file($_FILES["file"]["tmp_name"], "../imagenesSubidas/" . $file)) {
    echo $file;
}
?>		