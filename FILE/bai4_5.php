<?php
    echo '<pre>',print_r($_FILES),'</pre>';
    if(isset($_FILES['file_upload']['name'])){
        if($_FILES['file_upload']['error'] == 0){
            move_uploaded_file($_FILES['file_upload']['tmp_name'], 'image/' . $_FILES['file_upload']['name']);
            ?>
            <script>
                alert("Đã upload file thành công");
            </script>
            <?php
        }
        else{
            ?>
            <script>
                alert("Đã xảy ra lỗi trong quá tình upload");
            </script>
            <?php
        }

        $dir=opendir("image");
        while (($file = readdir($dir) !== false) ) {
            echo $file;
        }
        closedir($dir);

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    
</head>
<body>
    <div class="container">
        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="file_upload" multiple = "true" size='50'>
            <input type="submit" value="Upload file" name ="submit">
        </form>
    </div>
</body>
</html>