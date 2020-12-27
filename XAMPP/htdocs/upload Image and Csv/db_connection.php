<?php
$db_conn = mysqli_connect('localhost', 'root', '', 'uploadFile');

if ($db_conn->connect_error) {
    die('Data Does Not Coonected' . $db_conn->connect_error);
} else {
    if (isset($_POST['upload'])) {
        $images = $_FILES['picture']['name'];
        $target = "images/" . basename($images);
        $sql = "INSERT INTO images(picture) VALUES ('$images')";
        mysqli_query($db_conn, $sql);

        if (move_uploaded_file($_FILES['picture']['tmp_name'], $target)) {
            return $msg = "Image Upload Successfully";
        } else {
            return $msg = "Problem!!! In Uploading Image";
        }
    }
}
