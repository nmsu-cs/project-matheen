
<?php

use function PHPSTORM_META\type;

class Login
{

    private $error = "";

    public function evaluate($data)
    {
        
        $email = addslashes($data['email']);
        $password = addslashes($data['password']);

        //$query = "select * from users";
        $query = "select * from users where email = '$email' limit 1 ";


        $DB3 = new Database();
      
        $result = $DB3->read($query);
          

        if($result)
        {
            $row = $result[0];
            if($email == $row['email']){
                if($password == $row['password'])
                {
                    //create a session data
                    $_SESSION['mywebsite_db_userid'] = $row['userid'];
                }
                else{
                    $this->error .= "Incorrect Email or Password<br>";
                }
            }
            else {
                $this->error .= "Incorrect Email or Password<br>";
            }
        }
        else{

            $this->error .= "No such email found<br>";
        }

        return $this->error;
    }

    public function check_login($id)
    {        
        $query = "select userid from users where userid = '$id' limit 1 ";

        $DB = new Database();
        $result = $DB->read($query);

        if($result)
        {
            return true;
        }
        return false;
    }

}

//mysqli_query($conn,$sql);
//echo mysqli_error($conn);




?>
