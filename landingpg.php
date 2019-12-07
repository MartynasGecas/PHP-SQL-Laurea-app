<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
  <title>BDN</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <!--php header-->
  <?php include('header.php') ?>
  <style>
       h3 {
           margin: 10px;
  padding: 0 5px 5px;
  border: 1px solid #666;
  border-radius: 8px;
             background-color: #CEB31E;
  box-shadow: 0 0 0px #666;
  padding-top: 5px;
  
           color: white;
           font-size: 15px;
}
       p {
 
           font-size: 20px;
}
       h2 {
 
           font-size: 25px;
}
      body {
  background-color: #e8c63c;
}
   fieldset {
  margin: 10px;
  padding: 0 5px 5px;
  border: 1px solid #666;
  border-radius: 8px;
             background-color: #567D30;
  box-shadow: 0 0 10px #666;
  padding-top: 5px;
}

    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 900px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #355829;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #CEB31E;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
      img {
  padding: 20px;
          
          
}
  </style>
</head>
<body>


  
<div class="container-fluid text-center">    
  <div class="row content">
<div class="col-sm-2 sidenav">
    <img src="images/s.jpg" height="250" width="250" align="middle">
    <p></p>
    <img src="images/v.jpg" height="250" width="250" align="middle">
    <p></p>
    <img src="images/k.jpg" height="250" width="250" align="middle">
</div>
   <div class="col-sm-8 text-left"> 
     <fieldset>
     <h2 align="middle">Birštono Bike Rental</h2>
     </fieldset>
     
     <h2>Here you can rent a number of different transport vehicles. From a bike, to a scooter, to a boat. For a great prices. </h2>
     
        
     <h3>Bikes</h3>
     <p><img src="images/bikes.jpg" width="250" alt="bikes" align="left"> Great quality mountain bikes.<br></p>
       <fieldset>
     <h2 align="middle"> Prices from €2 an hour.</h2>
       </fieldset>
        <br><br><br>
     <h3>Electric scooters</h3>
        <p><img src="images/elc.jpg" width="250" alt="bikes" align="left"> Always charged and ready.<br></p>
       <br><br><br><br><br><br>
       <h3>Boats</h3>
        <p><img src="images/val.jpg" width="250" alt="bikes" align="left"> Can be transported to a chosen place.<br></p>
       <fieldset>
     <h2 align="middle"> Prices from €10 a day.</h2>
       </fieldset>
    </div>
    <div class="col-sm-2 sidenav">
        <fieldset>
      <div class="well">
        <h1>Order today!</h1>
      </div>
      <div class="well">
        <p>+370 640 26638</p>
      </div>
            </fieldset>
    </div>
</div>
</div>


<footer>
<!--footer php-->
    <?php include('footer.php') ?>
    </footer>

</body>
</html>
