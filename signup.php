
<?php

    include("server.php");
    include("signupclass.php");

    $name = "";
    $email = "";



    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $signup = new Signup();
        $result = $signup->evaluate($_POST);

        if($result != "")
        {

            echo "<div style='text-align:center;font-size:12px;color:white;background-color:grey;'>";
            echo "The following errors occured:<br>";
            echo $result;
            echo "</div>";

        }
        else{

            header("Location: login.php");
            die;

        }

        $name = $_POST['name'];
        $email = $_POST['email'];




    }


?>

<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Signup Page</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <div id="container">
        <?php if (!empty($error)): ?>
            <div class="error"><?php echo $error; ?></div>
            <div class="error2"><?php echo $error2; ?></div>
        <?php endif; ?>
            <h1>Sign Up</h1>
            <form method ="POST" action = "">
                <input value ="<?php echo $name ?>" name="name" id="text" placeholder="Name"><br><br>
                <input value ="<?php echo $email ?>" name="email" id="text" placeholder="Email"><br><br>
                <input name="password" id="text" placeholder="Password"><br><br>
                <input name="password" id="text" placeholder="Confirm Password"><br><br>
                <button type="submit">Sign Up</button>
            </form>
        </div>
        
    </body>
 

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            
        } 

        .container {
            height: 100px;
            max-width: 100px;
            margin: 0 auto;
            padding: 5px;
            background-color: #fff;
            color: #d9dfeb;
            border-radius: 5px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        
        input[type="email"],

        input[type="password"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            display: block;
            width: 70px;
            padding: 5px;
            font-size: 16px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }


        .error {
            color: red;
            margin-bottom: 15px;
        }

        .error2 {
            color: red;
            margin-bottom: 15px;
        }

    </style>

</html>


