<?php

class Admin{

        public $connect;

        function __construct(){

            $this->connect=new Mysqli('localhost', 'root', 'root', 'onlinestore');
            
            session_start();
        }


        public function register($fname,$lname,$email,$phone,$password) {
        
    $pwd = md5($password);

            $qry ="INSERT INTO admin SET first_name='$fname', last_name='$lname', email='$email', phone='$phone', password='$pwd'";

            $this->connect->query($qry);
            
            $userid=$this->connect->insert_id;

        return $userid;
        }


    public function login($email,$pass) {
        
$pwd = md5($pass);

        $qry = "SELECT * FROM admin WHERE email='$email' AND password='$pwd'";

    $log =  $this->connect->query($qry);

    $total=$log->num_rows;

    $id=0;

    if ($total > 0) {

        $dat = $log->fetch_assoc();

        $id = $dat['id'];
    }
    return $id;
    }


    public function logout(){
        session_destroy();
        header('location:home.php');
    }

    public function get_category() {
        $gc = "SELECT * FROM prod_category";

    $cc =  $this->connect->query($gc);
    
    $ar = array();
        while ($cd = $cc->fetch_assoc()) {
            $ar[]=$cd;
        }
        return $ar;
    }

    public function category_add($name) {
     $res = $this->connect->query("SELECT * FROM prod_category WHERE cat_name='$name'");

        if ($res->num_rows > 0) {
            $msg = 'Category already exist';
            header('location:category.php');
        }else {
            $this->connect->query("INSERT INTO prod_category SET cat_name='$name'");
            $msg = "Category added successfully";
            header('location:category.php');
        }

        $msg= "'Fill up category form first'";
        return $msg;
        header('location:category.php');

    }

    public function product_add($name, $price, $desc, $brand, $qty, $cat, $filearray) {
        $filename = $filearray['picture']['name'];     
        $filetype = $filearray['picture']['type'];      
        $filetmpname = $filearray['picture']['tmp_name']; 
        $fileerror = $filearray['picture']['error'];    
        $filesize = $filearray['picture']['size']; 

        $pro = $this->connect->query("SELECT * FROM products WHERE prod_name='$name'");

        if ($pro->num_rows > 0) {
            $msg = 'Product already exist';
            header('location:products.php');
        }else {
            if ($filename) {
                $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION)); //for path extension and changing it to lowercase
                $newfilename = time().rand().".$ext";
    
                $destination = "../images/$newfilename";
                $allowed = array('jpg','jpeg','png');
                if (in_array($ext, $allowed)) {      //for checking file type
                    if ($filesize <=200000000) {              //for checking file size
                        move_uploaded_file($filetmpname, $destination);
                    }else {
                        $feedback= "Nah Nigga your file too large";
                    }
                }else {
                    $feedback= "I want pictures mf";
                }
            }else {
                $new_filename = '';
            }

        }
        
            $qry="INSERT INTO products SET prod_name='$name', prod_price='$price', prod_desc='$desc', brand_name='$brand', prod_quantity='$qty', cat_id='$cat', prod_picture='$newfilename'";
            // die($qry);
            $this->connect->query($qry);
            $msg = "Product added successfully";
            header('location:products.php');
        

        $msg= "'Fill up product form first'";
        return $msg;
        header('location:products.php');

    
    }
    

    public function category_edit($name, $id) {


        $this->connect->query("UPDATE prod_category SET cat_name='$name' WHERE cat_id='$id'");
        header('location:category.php');
    }
        
    public function get_details($userid) {
        $qry = "SELECT * FROM admin WHERE id='$userid'";
        $res = $this->connect->query($qry);

        $dat = $res->fetch_assoc();
        return $dat;
    }

    public function get_products() {
        
        $gc = "SELECT * FROM products";

        $pros =  $this->connect->query($gc);
        
        $ar = array();
        while ($chk = $pros->fetch_assoc()) {
        $ar[]=$chk;
    }
    return $ar;
    }

    public function updatePhoto($file, $id){
        $filename = $file['picture']['name'];     
        $filetype = $file['picture']['type'];      
        $filetmpname = $file['picture']['tmp_name']; 
        $fileerror = $file['picture']['error'];    
        $filesize = $file['picture']['size']; 

        if ($filename) {
            $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION)); //for path extension and changing it to lowercase
            $newfilename = time().rand().".$ext";

            $destination = "../images/$newfilename";
            $allowed = array('jpg','jpeg','png');
            if (in_array($ext, $allowed)) {      //for checking file type
                if ($filesize <=200000000) {              //for checking file size
                    move_uploaded_file($filetmpname, $destination);
                    $qry = "UPDATE products SET prod_picture='$newfilename' WHERE prod_id='$id'";
                    $this->connect->query($qry);
                    $msg = "Product added successfully";
                    header('location:products.php');
                

                }else {
                    $feedback= "Nah Nigga your file too large";
                }
            }else {
                $feedback= "I want pictures mf";
            }
        }else {
            $new_filename = '';
        }


    }
    

    public function editProduct($name,$price,$desc,$brand,$cid,$id){
        $this->connect->query("UPDATE products SET prod_name='$name', prod_price='$price', prod_desc='$desc', brand_name='$brand', cat_id='$cid' WHERE prod_id='$id'");
        header('location:products.php');
    }

    public function catPhoto($file, $id){
        $filename = $file['picture']['name'];     
        $filetype = $file['picture']['type'];      
        $filetmpname = $file['picture']['tmp_name']; 
        $fileerror = $file['picture']['error'];    
        $filesize = $file['picture']['size']; 

        if ($filename) {
            $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION)); //for path extension and changing it to lowercase
            $newfilename = time().rand().".$ext";

            $destination = "../images/$newfilename";
            $allowed = array('jpg','jpeg','png');
            if (in_array($ext, $allowed)) {      //for checking file type
                if ($filesize <=200000000) {              //for checking file size
                    move_uploaded_file($filetmpname, $destination);
                    $qry = "UPDATE prod_category SET cat_pic='$newfilename' WHERE cat_id='$id'";
                    $this->connect->query($qry);
                    $msg = "Product added successfully";
                    header('location:category.php');
                

                }else {
                    $feedback= "Nah Nigga your file too large";
                }
            }else {
                $feedback= "I want pictures mf";
            }
        }else {
            $new_filename = '';
        }


    }


    public function categoryFetch($cat_id)
    {

            $cats=[];
            $query="SELECT * FROM prod_category WHERE cat_id ='$cat_id'";
            $res=$this->conn->query($query);
            if($res->num_rows > 0)
            {
                while($rec=$res->fetch_assoc())
                {
                    $cats[$rec['cat_id']]=$rec['cat_name'];
                }
            }
            return json_encode($cats);
        
    }

}









?>