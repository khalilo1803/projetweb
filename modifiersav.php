<?php

    $id=$_GET["id"];
    $commentaire=$_GET["commentaire"];
    $solution=$_GET["solution"];
   

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>modifier commentaire</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>modifier commentaire</h1>
<form  method="post" action="mod.php" ">
    <table>
        <tr>
            <td><label for="id">id</label></td>
            <td><input type="text"  value="<?php echo $id ?>" disabled></td>
            <td><input type="hidden" id="id" name="id" value="<?php echo $id ?>"></td>
        </tr>
        <tr>
            <td><label for="commentaire">commentaire</label></td>
            <td><input type="text" id="commentaire" name="commentaire" value="<?php echo $commentaire ?>"></td>
        </tr>
        <tr>
            <td><label for="solution">solution</label></td>
            <td><input type="text" id="solution" name="solution" value="<?php echo $solution ?>"></td>
        </tr>
       
            <td><input type="submit" value="Modifier"></td>
        </tr>
    </table>
</form>

</body>
</html>