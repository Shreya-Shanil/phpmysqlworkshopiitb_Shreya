<?php
    require("connect.php");
    $fetched = $conn->query("SELECT count FROM visit");
    $counter = $fetched->fetch_assoc();
    $count = $counter['count'];
    $count += 1;
    print_r("Total visitors: ".$count);
    $write = $conn->query("UPDATE visit SET count=$count");
?>