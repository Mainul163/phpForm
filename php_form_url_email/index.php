<!DOCTYPE html>
<html>

<head>
    <title>Page Title</title>
</head>

<body>

    <h1>Email : mainulisraf160@gmail.com</h1><br /><br />
    <?php
   
   
    $email="mainulisraf160gmail.com";

    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "email correct" ;
    }else {
        echo "email wrong" ;
    }


   ?>
</body>

</html>