<?php

if (isset($_POST['submit'])) {

    // Grabbing the data
    $uid = $_POST['uid']; 
    $pwd = $_POST['pwd'];
    $pwdRepeat = $_POST['pwdrepeat'];
    $email = $_POST['email'];


    $users_id = $_POST['users_id'];
    $added_task = $_POST['added_task'];
    $done_task = $_POST['done_task'];
    $not_done_task = $_POST['not_done_task'];
    $deleted_task = $_POST['deleted_task'];
    $task_id = $_POST['task_id'];
    $task_name = $_POST['task_name'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $done = $_POST['done'];
    $users_id = $_POST['status'];



    // Instantiate singupController class
    include "../connect_db/dbh.classes.php";
    include "../sign_up/signup.classes.php";
    include "../sign_up/signup-contr.classes.php";


    $signup = new SignupContr($uid, $pwd, $pwdRepeat, $email);

    // Running error handlers and user signup
    $signup->signUpUser();

    // Going back to front page
    // header("location: ../index.php?error=succes");
    header("location: ../tasks/main.php");
}