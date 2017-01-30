<?php   
if (isset($_GET['file'])) { 
    $file = $_GET['file'] ;
        if (file_exists($file) && is_readable($file) && preg_match('/file:///C:/Users/AKASH%20SINGH%20SENGAR/Downloads/Video/Type%20Casting%20in%20C%20(HINDI)%20-%20YouTube_2.mp4$/',$file))  { 
            header('Content-type: application/mp3');  
            header("Content-Disposition: attachment; filename=\"$file\"");   
            readfile($file); 
        } 
    } else { 
    header("HTTP/1.0 404 Not Found"); 
    echo "<h1>Error 404: File Not Found: <br /><em>$file</em></h1>"; 
} 
?>