<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>新增商品頁</title>
	</head>
	<body>

		<form enctype="multipart/form-data" action="addcommodity2.php" method="POST">
			商品名稱:
			  <input type="text" name="name" />
			<br>
			商品敘述:
				<textarea name="description"></textarea>
			<br>
			商品價格:
				<input type="text" name="price" />
			<br>
			商品存貨:
				<input type="text" name="stock" />
			<br>
			商品照片:
				<input type="file" name="pic" class="form-control" accept="*/image"/>
			<br>
				<input type="submit" value="新增"/>
				<input type ="button" onclick="history.back()" value="取消">
		</form>

	</body>
</html>

