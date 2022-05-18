<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>商品更新頁面</title>
</head>

<body>
	<br /><br />
	<center>
	<div class="jumbotron" >
		<table width="1200" align="center" cellpadding="3" cellspacing="0">
			<tr  align="center" valign="center"  bgcolor="#00ffff">
				<td width="300">
					<a href="addcommodity.php">新增商品</a>	
				</td>
				<td width="300">
					<a href="../index.php">回首頁</a>
				</td>
			</tr>
		</table>
	</div>
	<center/>
	<table width="1200" align="center" valign="center" cellpadding="3" cellspacing="0" border="1">
		<!-- 本文 --->
		<tr  align="center" valign="center"  bgcolor="	#fff0f5"><td width="300">商品照片</td><td width="300">商品名稱</td><td width="480">商品描述</td><td width="250">商品價格</td><td width="400">商品更新日期</td><td width="400">商品上傳日期</td><td width="100">存量</td><td width="200">修改</td><td width="200">刪除</td></tr>

		<?php
			$hostname = "localhost";
			$port = "3307";
			$username = "root";
			$password = "1234";
	        $database = "db";			/*資料庫名稱*/
            // 建立與SQL資料庫的連線
            $link = new PDO('mysql:host='.$hostname.';port='.$port.';dbname='.$database.';charset=utf8', $username, $password);
			// 用SQL語法呼叫exec()
			$query = "SELECT * FROM commodity";
			$result = $link->query($query);
			// 若是Insert, Update, Delete，不是使用query()，而是使用exec()

			// $link->exec()的結果會放在$result中；一般為一陣列(Array)，包含N筆資料。
			// 然後，用$result->fetch()將此N筆資料，1筆1筆的讀出來，放至$row中。
			foreach ($result as $row)							// 同 while ($row = $result->fetch())
			{
				echo "<tr align=center bgcolor=\"#FFEECC\"><td><img src='./uploads/".$row["Picture"]."' width=200 height=200></td><td>".$row["Name"]."</td><td valign=\"top\" align=\"left\">".nl2br($row["Description"])."</td><td valign=\"top\" align=\"left\">".$row["Price"]."</td><td valign=\"top\" align=\"left\">".$row["Updatetime"]."</td><td valign=\"top\" align=\"left\">".$row["Uploadtime"]."</td><td valign=\"top\" align=\"left\">".$row["stock"]."</td><td valign=\"top\" align=\"left\"><a href='modifycommodity.php?ID=".$row["ID"]."'>修改</a></td>"."<td valign=\"top\" align=\"left\"><a href='removecommodity.php?ID=".$row["ID"]."'>刪除</a></td>";
			}
		?>
	</table><br /><br />
	
	<div style="position: relative; width: 500px; height: 120px;">
		<?php
			//系統時間
			date_default_timezone_set('Asia/Taipei');
			$datetime = date ("Y- m - d / H : i : s");
			echo "目前時間:".$datetime ."<br>";
			//系統時間
			
			//計數器
			try{
				$counter = intval(file_get_contents("counter.dat")) + 1;
				$fp = fopen("counter.dat", "w");
				fwrite($fp, $counter);
				fclose($fp);
				echo "Visitors: " . $counter;
			}catch (Exception $e){
				$back=1;
				$fp = fopen("counter.dat", "w");
				fwrite($fp, $back);
				fclose($fp);
				echo "Visitors: " . $back;
			}
			//計數器
		?>
	</div>

</body>
</html>
