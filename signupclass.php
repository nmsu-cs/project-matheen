<?php

class Signup
{

    private $error = "";

    public function evaluate($data)
    {

    
        $email = addslashes($data['email']);

        //$query = "select * from users";
        $query = "select * from users where email = '$email' limit 1 ";
        //$query;
        $DB2 = new Database();

    
        $result = $DB2->read($query);
        
        if($result)
        {
            $this->error .= "Email already exists<br>";
        }

        else{

            $this->error = "";
        }

        
        if($this->error == "")
        {
            // no error
            $this->create_user($data);

        }
        else
        {
            return $this->error;

        }
    }

    public function create_user($data)
    {

        $name = $data['name'];
        $email = $data['email'];
        $password = $data['password'];

        //User does not create url, so we do it.
        $url_address = strtolower($name);
        $userid = $this->create_userid();


        $query = "insert into users 
        (userid,name,email,password,url_address) 
        values 
        ('$userid','$name','$email','$password','$url_address')";

        //return $query;
        $DB = new Database();
        $DB->save($query);

    }

    private function create_userid()
    {
        $length = rand(4,19);
        $number = "";
        for($i = 0; $i < $length; $i++){
            $new_rand = rand(0,9);
            $number = $number . $new_rand;
        }
        return $number;
    }

}

//mysqli_query($conn,$sql);
//echo mysqli_error($conn);




?>
