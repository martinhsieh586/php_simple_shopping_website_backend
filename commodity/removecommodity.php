<?php
	$hostname = "localhost";
	$port = "3307";
	$username = "root";
	$password = "1234";
    $database = "db";			/*資料庫名稱*/
    // 建立與SQL資料庫的連線
    $link = new PDO('mysql:host='.$hostname.';port='.$port.';dbname='.$database.';charset=utf8', $username, $password);
	
	$ID1=$_GET["ID"];
	
	//先抓出資料列圖片連結後，再移除圖片
	$query1 = "SELECT * FROM commodity WHERE ID=$ID1";
	$result = $link->query($query1);
	foreach ($result as $row)
	{
		$Pictmp=$row["Picture"];
	}
	unlink("uploads/$Pictmp"); //使用unlink來刪除舊圖片
	//先抓出資料列圖片連結後，再移除圖片
	
	//移除資料行
	$query = "DELETE FROM commodity WHERE ID = $ID1";
	$link->exec($query);
	//移除資料行
	
	header("Location: displaycommodity.php"); 
?>