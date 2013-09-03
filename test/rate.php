<?php
    include_once "../config/config.php";
    
    $mysqli = new mysqli($e_srv, $e_usr, $e_pass, $e_db);
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }   
     
    $orig = isset($_GET['orig']) ? mysqli_real_escape_string($_GET['orig']) : '';
    $dest = isset($_GET['dest']) ? mysqli_real_escape_string($_GET['dest']) : '';

    $query = "SELECT * FROM rate WHERE orig = '$orig' AND dest = '$dest';";
    $rates = $mysqli->query($query);
    $rows = array();
    while ($r = mysqli_fetch_assoc($rates)) {
        $rows[] = $r;
    }
   $rows[] = $rates->num_rows; 
   print json_encode($rows);
?>