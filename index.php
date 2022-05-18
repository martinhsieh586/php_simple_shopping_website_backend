<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <?php require_once "./method/bootstrap.html" ?>
    <link rel="stylesheet" href="style.css">
    <title>首頁</title>
  </head>
  <body background= "http://episode.cc/Content/storyimage/CEE7EA4C-%E8%83%8C%E6%99%AF.jpg">
    <div class="jumbotron" style="background-image:url(http://i.imgur.com/lyIDL5K.jpg);width:aut;background-position:center;height:300px">
    </div>
	
	<!--此為查詢列-->
    <div class="jumbotron" > 
      <div class="panel panel-primary">
        <div class="panel-body" valign="center">
		  <div style="text-align:center;">
			<p>商品列表</p>
			<form class="" action="search.php" method="post">
            <input type="text" name="searchGood" value="">
            <input type="submit" name="" value="搜尋">
            </form>
		  </div>
		  <div style="text-align:right;" >
		   <a href="./commodity/displaycommodity.php" title="更新商品頁">更新商品頁</a>
		  </div>
        </div>
      </div>
    </div>
	<!--此為查詢列-->
	 
	<!--此為商品列-->
    <div class="col-md-12">
		<?php
			ini_set("display_errors", "On");
			$hostname = "localhost";
			$port = "3307";
			$username = "root";
			$password = "1234";
	        $database = "db";			/*資料庫名稱*/
            // 建立與SQL資料庫的連線
            $link = new PDO('mysql:host='.$hostname.';port='.$port.';dbname='.$database.';charset=utf8', $username, $password);
			$query = "SELECT * FROM commodity";
			$result = $link->query($query);
			foreach ($result as $row) { 
		?>
		<div class="col-md-3">
		 <div class="panel panel-primary">
		  <div class="panel-heading">
		   商品:<?php echo $row['Name']; ?>
		  </div>
		  <ul class="list-group">
		   <li class="list-group-item"><?php echo "<img src='./commodity/uploads/".$row["Picture"]."' width=200 height=200>"; ?></li>
		   <li class="list-group-item">價格:<?php echo $row['Price']; ?></li>
		 </div>
		</div>
		<?php
			}
		?>
    </div>
	<!--此為商品列-->
  </body>
</html>