<?php
$email = $_POST['vulu_email'];
$i = 0;
foreach ($_FILES as $file) {
    $tmp_name = $file["tmp_name"][0];
    if ($email == '') {
        $name = time() . $file['name'][0];
    } else {
        $extension = pathinfo($file['name'][0], PATHINFO_EXTENSION);
        $arrMail = explode('@', $email);
        $name = $arrMail[0] . '_' . time() . '.' . $extension;
    }
    move_uploaded_file($tmp_name, "./phoi/$name");
    $i++;
}
header("Location: waiting.php");
