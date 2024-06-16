<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once 'link.php' ?>
    <link rel="stylesheet" href="user.css">
    <title>Zakaz</title>
</head>
<body>
    <?php include_once 'header.php' ?>

    <?php

    if(isset($_POST["lName"]) && isset($_POST["fName"]) && isset($_POST["Email"]) &&
    isset($_POST["Comment"]) && isset($_POST["Size"])) 
    {
        $nname = ($_POST["lName"]);
        $surname = ($_POST["fName"]);
        $email = ($_POST["Email"]);
        $size = ($_POST["Size"]);
        $comment = $_POST["Comment"];
        
    } else {
        echo "Произошла ошибка ";
    }
    
    if ( isset($_FILES["picture"]) && $_FILES["picture"]['error'] == 0)
    {
        $name = "upload/" . $_FILES["picture"]["name"];
        move_uploaded_file($_FILES["picture"]["tmp_name"], $name);
    } else {
        echo "Файл не выбран";
    }
    
    setcookie('fName', $nname, time()+60);
    setcookie('lName', $surname, time()+60);
    setcookie('Email', $email, time()+60);

    if (!isset($_COOKIE['fName']) && !isset($_COOKIE['lName']) && !isset($_COOKIE['Email']))
    {
        setcookie('fName', $nname, time()+60);
        setcookie('lName', $surname, time()+60);
        setcookie('Email', $email, time()+60);

    }
    ?>

<main class="main">
        <div class="main-container">
            <h2 class="login">Ваш заказ</h2><br>
            <p>Имя: <?php echo $nname; ?></p>
            <p>Фамилия: <?php echo $surname; ?></p>
            <p>Почта: <?php echo $email; ?></p>
            <p>Указанный размер: <?php echo $size; ?></p>
            <p>Комментарий к заказу: <?php echo $comment; ?></p>
            
        </div>
    </main>
    <?php include_once 'footer.php' ?>
</body>
</html>


