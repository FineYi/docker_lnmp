<?php
    // 连接 Mysql
    $user = "root";
    $pass = "111111";
    $dbh = new PDO('mysql:host=local_mysql;dbname=mysql;port=3306', $user, $pass);
    
    foreach($dbh->query('SELECT * from user') as $row) {
        print_r($row);
    }

    // // 连接 Redis
    // $redis = new Redis();
    // $redis->connect('redis', 6379);
    // $redis->set("test-key","hello");
    // echo "Stored string in redis:: " . $redis->get("test-key");
?>