<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>修改商品頁</title>
	</head>
	<body>
	<?php
		$tmp=$_GET["ID"];
		$hostname = "localhost";
		$port = "3307";
		$username = "root";
		$password = "1234";
		// 建立與SQL資料庫的連線
		$link = new PDO('mysql:host='.$hostname.';port='.$port.';charset=utf8', $username, $password);
		$query = "SELECT * FROM commodity WHERE ID=$tmp";
		$result = $link->query($query);
		foreach ($result as $row)
		{
			$Name=$row["Name"];
			$Descriptiontmp=nl2br($row["Description"]);
			$ID=$row["ID"];
			$Price=$row["Price"];
			$stock=$row["stock"];
			$Picture=$row["Picture"];
		}
		$Description = str_replace("<br />","" ,$Descriptiontmp);
	?>
		<center>
			<form action="modifycommodity2.php" enctype="multipart/form-data" method="POST">

			  商品名稱:<input type='text' VALUE="<?php 	echo $Name ?>" name='Name' /><br>
											
			  商品描述:<textarea name='description' /><?php  echo $Description ?></textarea><br>
			  
			  商品價格:<input type='text' VALUE="<?php 	echo $Price ?>" name='price' /><br>
			  
			  商品存貨:<input type='text' VALUE="<?php 	echo $stock ?>" name='stock' /><br>
			  <?php
				echo "<img  src='uploads/".$row["Picture"]."' widht=200 height=200><br>";
			  ?>
			  商品照片:<input type="file" name="pic" class="form-control" accept="*/image"/><br>
				<br>
			  <input type="hidden" name="ID" value="<?php echo $ID ?>">
			  <input type="submit" value="更新"/>
			  <input type ="button" onclick="history.back()" value="取消">
			  
			</form>
		</center>
	</body>

</html>
