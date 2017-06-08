<html>
<head>
  <title>Flowers Shop</title>
  <!-- Bootstrap Imports-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <!-- Importing Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Barrio" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Arapey" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">

  <!-- CSS and Javascript files path -->
  <link rel = "stylesheet" type = "text/css" href = "shop_design.css" />
  <script type="text/javascript" src="shop_code.js"></script>
</head>

<body style="background-color: #9E9E9E;">
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container row">
      <div class="navbar-header col-xs-8">
        <a class="navbar-brand">
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          Flower Shop
        </a>
      </div>
      <div id="navbar" class="collapse navbar-collapse row col-xs-4">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#page-title">Top</a></li>
          <li class="active"><a href="#add-product">Add</a></li>
          <li class="active"><a href="#display-products">Display</a></li>
          <li class="active"><a href="#total-price">Total Price</a></li>
        </ul>
      </div>
    </div>
  </nav>


  <!-- Page container -->
  <div class="container">

    <!-- Page title -->
    <div class="jumbotron container" id="page-title">
      <div>
        <br /><br />
        <br />
        <span class="letter">W</span>elcome <span class="letter">T</span>o <span class="letter">T</span>he <span class="letter">F</span>lowers <span class="letter">S</span>hop
        <br /><br />
        <br /><br />
        <br />
      </div>
    </div>

    <!-- Add container -->
    <div class="jumbotron container" style="background: #ec407a; padding-left: 290px">
      <div id="add-product">
        <form action="add_flower.php" method="post">
          <p><big>Add a new flower</big></p><br />
          <input type="text" class="form-control form-control-lg" name="flowerName" placeholder="Flower Name" /><br />
          <input type="text" class="form-control form-control-lg" name="flowerPrice" placeholder="Flower Price" /><br />
          <button type="submit" class="btn" style="color:black">ADD</button>
          <br />
        </form>
      </div>
    </div>

    <!-- Display container-->
    <div class="jumbotron container" style="background: #212121; " id="display-products">
      <div>
        <br /><br />
        <?php
        $mysqli = new mysqli("localhost", "root", "AluMinum_Finish901", "shop");
        $sql="select * from Products";
        $result = $mysqli->query($sql);
        if($result->num_rows == 0)
          echo "No flowers found .." ;
        else {
          echo '<table id="table"><tr><th>Flower Name</th><th>Flower Price</th><th>Number Of Flowers</th><th>Drop</th</tr>';
          while($row = $result->fetch_assoc()) {
              echo '<tr><td>'.
              $row["productName"].
              '</td><td name="flowerPrice">'.
              $row["productPrice"].
              '</td><td><input onkeydown="getId(this)" onkeyup="updatePrice(this);" id="quantity" type="text" class="form-control form-control-lg" name="flowerQuantity" placeholder="0" /></td>'.
              '<td><button class="btn" style="color:black; font-weight: bold; id="del" onclick="delRow(this);">Delete</button></td></tr>';
          }
          echo "</table>";
        }
      ?>
      <br /><br />
      </div>
    </div>

    <!-- Total price container -->
    <div class="jumbotron container" style="background: #757575 ; padding-left: 290px">
      <div id="total-price">
        <label>Total price : </label>
        <label id="total">0</label>
        <label>$</label>
      </div>
    </div>
</body>
</html>
