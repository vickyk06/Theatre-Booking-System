<?php

    //get value from page

    $channel = $_POST['channel'];
    //Conect with the database
            require_once 'connection.php';

    $query = "SELECT hallno,stime FROM novox.theatre where channel =$channel";
    $result = mysql_query($query);
    $msg ='';
    $msg = $msg." <table border='1' >";

    $msg = $msg. '<tr>';
    $msg = $msg.    '<th> hallno </th>';
    $msg = $msg. '</tr>';

    while($row = mysql_fetch_array($result)) {

        $msg = $msg. '<tr>';
            $msg = $msg. '<td>'.$row['hallno'].'</td>';
        $msg = $msg. '</tr>';
    }

    $msg = $msg. '</table>';

    echo $msg;

    ?>