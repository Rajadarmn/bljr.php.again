<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="result.php" method="POST">
    <label for="username">
        <h1>username</h1>
        <input type="text" name="username" id="username">
    </label>
    <br>
    <button type="submit">simpan</button>
    </form> -->

   <?php
    if(isset($_GET["username"])){
    ?>
    <h1>hello <?php $_GET["username"]?></h1>
    <?php } ?>
    
    <form >
    <label for="username">
        <h1>username</h1>
        <input type="text" name="username" id="username">
    </label>
    <br>
    <button type="submit">simpan</button>
    </form>
</body>
</html>