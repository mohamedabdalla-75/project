<?php 
session_start();
include '../config/SYD_Class.php';
$coder = new sydClass();
if (isset($_POST["btnLogin"])){
    $user = $_POST['txt_user_name'];
    $pass = $_POST['txt_password'];

    // Isticmaal magacyada columns saxda ah: halkan waxaan u maleynayaa columns: user_no, user_name, password, type
    $qry = "SELECT * FROM user_info u WHERE u.user_name='$user' AND password='$pass' ";
    $coder->search($qry);

    if($coder->result->num_rows == 1){
        while($row = $coder->result->fetch_assoc()){
            $_SESSION['username']  = $row['user_name'];
            $_SESSION['user']      = $row['user_no'];    // ama magaca PK ee table-ka
            $_SESSION['user_image'] = $row['image'];
            // keydi nooca user-ka (admin/user)
            $_SESSION['type'] = isset($row['type']) ? $row['type'] : 'user';
        }

        $index_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname(dirname($_SERVER['PHP_SELF'])) . '/index.php';
        header("Location: $index_url");
        exit();
    } else {
        header("Location: Login.php?message=Your Username or password is wrong");
        exit();
    }
}
?>
