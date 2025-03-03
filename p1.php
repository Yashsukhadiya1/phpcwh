<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP NEW</title>
</head>
<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;


    }
.container{
    max-width: 80%;
    background-color: pink;
    margin :auto;
    padding: 23px;
    

}
</style>
<body>
    <div class="container">
        <h1>Lets learn About Php</h1>
        THIS IS MY 1ST PHP WEBSITE
        <?php
        $a=0;
        for ($a=0; $a <10 ; $a++) { 
            echo"<br> the value of a is;";
            echo $a;
        }
    
        ?>
    </div>
</body>
</html>