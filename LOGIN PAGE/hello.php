<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>SIGN IN</title>
    <link rel="stylesheet" href="hello.css">
</head>
<body>
    <div class="main-div">
    <?php
       $username=$_POST['name'];
       $password=$_POST['pass'];

        if ($username == "admin@gmail.com" and $password == "admin@123")
        {
            echo " <h1>LOGIN SUCCESSFULLY <br> 👽 </h1> ";
        }
        else{
            echo "<h1> INPUT THE RIGHT <br> CREDENTIALS YOU NOOB <br> 🙂</h1>";
        }


    ?>
    <div>

</body>
</html>