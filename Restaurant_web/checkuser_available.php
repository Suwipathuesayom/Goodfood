<?php 

    include_once('functions.php');

    $usernamecheck = new DB_con();

    // GET_post
    $uname = $_POST['username'];

    $sql = $usernamecheck->usernameavailable($uname);

    $num = mysqli_num_rows($sql);

    //check username

    if ($num > 0) {
        echo "<span style='color: red;'>มีชื่อผู้ใช้เชื่อมโยงกับบัญชีอื่นแล้ว.</span>";
        echo "<script>$('#submit').prop('disabled', true);</script>";
    } else {
        echo "<span style='color: green;'>ชื่อผู้ใช้ใช้งานได้.</span>";
        echo "<script>$('#submit').prop('disabled', false);</script>";
    }

?>