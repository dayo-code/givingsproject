<?php

class User{
    public $conn;
    public $salt1= "thegivings";
    public $salt2= "@user_confid057";

    public function __construct(){
        $this->conn= new Mysqli('localhost', 'root', 'root', 'onlinestore');

        if ($this->conn->connect_error) {
            die("There was an error connecting to the database");
        }
        session_start();
    }

public function register($fname, $lname, $email, $pass, $phone){
    $password = md5($this->salt1.$pass.$this->salt2);

    $qry = "INSERT INTO user SET user_firstName='$fname', user_lastName='$lname', user_email='$email', user_password='$password', user_phone='$phone'";

    $this->conn->query($qry);

    $userid = $this->conn->insert_id;
     return $userid;
}

public function login($mail, $pass){
    $password = md5($this->salt1.$pass.$this->salt2);

    $qry = "SELECT * FROM user WHERE user_email ='$mail' AND user_password='$password'";

   $log =  $this->conn->query($qry);

   if ($this->conn->error) {
       die("Something went wrong");
   }

   if ($log->num_rows > 0) {
       return $log->fetch_assoc();
   }
   return false;

}


public function logout(){

    session_destroy();
    header("location:index.php");
}


public function productPage($id){
    $qry = "SELECT * FROM products WHERE prod_id='$id'";

    $res =  $this->conn->query($qry);
    if ($res->num_rows > 0) {
        return $res->fetch_assoc();
    }
}

// public function manageCart($id){
//     $qry = "SELECT * FROM products WHERE prod_id='$id'";
//     SELECT product_name, product_price FROM shop_products WHERE product_code=? LIMIT 1"
//     $res =  $this->conn->query($qry);
//     if ($res->num_rows > 0) {
//         return $res->fetch_assoc();
//     }
// }


}


?>