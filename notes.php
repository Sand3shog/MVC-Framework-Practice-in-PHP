<?php
    include 'Database.php';
    include 'utils.php';

    $db = new Database();

   $statement = $db->query("SELECT * from notes");
   $notes = $statement->fetchAll();
//    dd($notes);

    $navTitle = "Notes";
    include 'views/notes.view.php';
