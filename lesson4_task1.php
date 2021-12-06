<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <style>
        div{
        display: flex;
        flex-wrap: wrap;
        align-items: center;
         }
    </style>
</head>
<body>
<div>
    <?php
    $files = scandir("images");
        for($i = 2; $i < count($files); $i++){?>
    <a href="lesson4_fullImage.php?img=<?= $files[$i]?>"><img width="400" src="images/<?= $files[$i]?>" alt=""></a><hr><?php
}
    ?>
</div>
    <br>
    <form action="lesson4_server.php" method="post" enctype="multipart/form-data">
     <p>Выберите файл</p>
     <input type="file" name="photo" accept="image/*"><br><br>
     <input type="submit" value="Загрузить">
     </form>
</body>
</html>

