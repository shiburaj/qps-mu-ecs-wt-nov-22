<?php
$fileUploaded = false;

if (isset($_FILES['file'])) {
    $file_name = $_FILES['file']['name'];
    $file_type = $_FILES['file']['type'];
    $file_size = $_FILES['file']['size'];
    $file_temp = $_FILES['file']['tmp_name'];
    $errors = null;

    if ($file_type == 'image/png' || $file_type == 'image/jpg' || $file_type == 'image/jpeg') {
        move_uploaded_file($file_temp, $file_name);
        $fileUploaded =  true;
    } else {
        $errors = 'Invalid file type.';
        $fileUploaded =  false;
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP File Upload</title>
</head>

<body>
    <form action="index.php" method="post" enctype="multipart/form-data">
        <label for="file">Select a JPG, GIF, PNG or TIF File:</label>
        <input type="file" name="file" id="file" accept="image/*" />
        <button>Upload</button>
        <?php if (isset($errors)) : ?>
            <div><?= $errors ?></div>
        <?php endif ?>
    </form>
    <?php if (!$fileUploaded) { ?>
        <p>No Image has been uploaded</p>
    <?php } else { ?>
        <p>Image has been successfully uploaded</p>
    <?php } ?>
</body>

</html>