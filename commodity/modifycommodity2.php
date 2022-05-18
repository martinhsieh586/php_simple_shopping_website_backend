<?php
	$ID1=$_POST["ID"];
	$Name=$_POST["Name"];
	$description1=$_POST["description"];
	$Price=$_POST["price"];
	$stock=$_POST["stock"];
	
	/*取得圖片詳細內容*/
	$filename=$_FILES['pic']['name'];		//上傳檔案的原始名稱
	$tmpname=$_FILES['pic']['tmp_name'];	//上傳檔案後的暫存資料夾位置
	$filetype=$_FILES['pic']['type'];		//上傳的檔案類型
	$filesize=$_FILES['pic']['size'];		//上傳的檔案原始大小
	/*取得圖片詳細內容*/
	
	$upload_dir='uploads/';					//設置圖片上傳路徑
	
	/*取得檔案副檔名*/
	$imgExt=strtolower(pathinfo($filename,PATHINFO_EXTENSION));
	/*取得檔案副檔名*/
	
	/*限制上傳圖片類型*/
	$valid_extensions=array('jpg','png','gif');
	if ( !in_array( $filetype, $valid_extensions ) ){
		header("Location: modifycommodity.php"); 
	}
	/*限制上傳圖片類型*/
	
	/*再給圖片一個隨機編號+副檔名*/
	$picProfile=rand(1000,1000000).".".$imgExt;
	/*再給圖片一個隨機編號+副檔名*/
	
	/*move_uploaded_file() 函式將上傳的檔案移動到新位置，函式中內容是將此檔案原資料夾抓出來，再將符合的檔案，放入新的位置*/
	move_uploaded_file($tmpname,$upload_dir.$picProfile);
	/*move_uploaded_file() 函式將上傳的檔案移動到新位置，函式中內容是將此檔案原資料夾抓出來，再將符合的檔案，放入新的位置*/
	
	$description2 = str_replace("\n","" ,$description1);
	
	//資料庫連結
	$hostname = "localhost";
	$port = "3307";
	$username = "root";
	$password = "1234";
    $database = "db";			/*資料庫名稱*/
    // 建立與SQL資料庫的連線
    $link = new PDO('mysql:host='.$hostname.';port='.$port.';dbname='.$database.';charset=utf8', $username, $password);
	//資料庫連結
	
	//先刪除舊圖片，為了取得舊圖片的名稱
	$query1 = "SELECT * FROM commodity WHERE ID=$ID1";
	$result = $link->query($query1);
	foreach ($result as $row)
	{
		$Pictmp=$row["Picture"];
	}
	unlink("uploads/$Pictmp");//使用unlink來刪除舊圖片
	//先刪除舊圖片，為了取得舊圖片的名稱
	
	//再修改
	$query2 = "UPDATE `commodity` SET Name='$Name' , Description='$description2',Price='$Price',stock='$stock',Picture='$picProfile' WHERE ID=$ID1";
	$link->exec($query2);
	//再修改	
	
	header("Location: displaycommodity.php"); 
?>