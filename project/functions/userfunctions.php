<?php 

    session_start();
    include('config/dbcon.php');

    function getAllActive($table)
    {
        global $con; 
        $query = "SELECT * FROM $table WHERE status='0' "; 
        $query_run = mysqli_query($con, $query);
        return  $query_run;

    }

    function getAllTrending()
    {
        global $con; 
        $query = "SELECT * FROM products WHERE trending='1' "; 
        $query_run = mysqli_query($con, $query);
        return  $query_run;

    }

    function getSlugActive($table, $slug)
    {
        global $con; 
        $query = "SELECT * FROM $table WHERE slug = '$slug' AND status='0' LIMIT 1"; 
        $query_run = mysqli_query($con, $query);
        return  $query_run;
    }
    function getProdByCategory($category_id)
    {
        global $con; 
        $query = "SELECT * FROM products WHERE category_id = '$category_id' AND status='0'"; 
        $query_run = mysqli_query($con, $query);
        return  $query_run;
    }

    function getIDActive($table, $id)
    {
        global $con; 
        $query = "SELECT * FROM $table WHERE id = '$id' AND status='0'"; 
        $query_run = mysqli_query($con, $query);
        return  $query_run;

    }
    function getCartItems()
    {
        global $con; 
        $userId= $_SESSION['auth_user']['user_id'];
        $query = "SELECT c.id as cid, c.prod_id, c.prod_qty, p.id as pid, p.name, p.image, p.selling_price 
            FROM carts c, products p WHERE c.prod_id=p.id AND c.user_id = '$userId' ORDER BY c.id DESC "; ////luu y
        $query_run = mysqli_query($con, $query);
        return  $query_run;

    }

    function getOrders()
    {
        global $con; 
        $userId= $_SESSION['auth_user']['user_id'];
        $query ="SELECT * FROM orders WHERE user_id ='$userId' ORDER BY id DESC";
         $query_run = mysqli_query($con, $query);
         return $query_run;
    }

    function redirect($url, $message)
    {
        $_SESSION['message'] = $message;
            header("location: ".$url);
            exit(0);
    }   

    function checkTrackingNoValid($trackingNo){
        global $con; 
        $userId= $_SESSION['auth_user']['user_id'];

        $query ="SELECT * FROM orders WHERE tracking_no = '$trackingNo' AND user_id = '$userId'";
        return mysqli_query($con , $query);
    }


?>