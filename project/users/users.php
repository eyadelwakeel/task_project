<?php



    function getUsers()
{
    $username = "root";
    $password = "";
    $dbh = new PDO("mysql:host=localhost;dbname=tasks_project", $username, $password);

    $query = "SELECT * FROM users";
    $statement = $dbh->prepare($query);
    $statement->execute();
    $users = $statement->fetchAll(PDO::FETCH_ASSOC);

    return $users;
}
    function gettasks()
{
    $username = "root";
    $password = "";
    $dbh = new PDO("mysql:host=localhost;dbname=tasks_project", $username, $password);

    $query = "SELECT * FROM tasks";
    $statement = $dbh->prepare($query);
    $statement->execute();
    $tasks = $statement->fetchAll(PDO::FETCH_ASSOC);

    return $tasks;
}










