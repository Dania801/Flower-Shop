<html>
<head>
	<meta charset="utf-8">
	<title>Adding flower</title>
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<!-- Importing Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">

	<style>
	body{
		background-color: white;
		font-family: 'Dancing Script', cursive;
		font-size: 40px;
		text-align: center;
		color: #5D4037;
		font-weight: bold ;
	}
	</style>

</head>
<body class="body-wallpaper" style="background-image : url('littleflower.jpg') ; background-repeat: no-repeat; background-size: 50%; ">
	<div class="container container-fluid">
					<br /><br /><br />
					<br />
		<div class="container">
			<div class="container" style="width: 500px">
        <?php
          $fn = $_POST["flowerName"];
          $fc = $_POST["flowerPrice"] ;
          $mysqli = new mysqli("localhost", "root", "AluMinum_Finish901", "shop");
          $sql="insert into Products (productName , productPrice) values('$fn','$fc')";
          $result = $mysqli->query($sql);
          echo $fn.' is added to the flower cart !';
        ?>
      </div>
    </div>
  </div>
  <br />
  <button onclick="window.location.href='shop_page.php'" class="btn">Back</button>
</body>
</html>
