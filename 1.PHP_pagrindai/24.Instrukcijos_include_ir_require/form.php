<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Darbas su formomis</title>
</head>

<body>
    <!-- 1, 2 -->
    <form action="<?=$_SERVER['REQUEST_URI']?>" method="post" name="myform">
        <textarea name="manotekstas" cols="30" rows="10"></textarea>
        <input type="submit" value="Siusti teksta" name="myform">
    </form>
</body>

</html>