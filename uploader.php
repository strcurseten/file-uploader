<?php

$destination = "C:/xampp/htdocs/file-uploader/uploads" . $_FILES['userfile']['name'];

$tmp = $_FILES['userfile']['tmp_name'];

if (is_uploaded_file($tmp)) {
    if (move_uploaded_file($tmp, $destination)) {
        echo "File is successfully uploaded";
        exit();
    }
}
echo "Unable to upload file";