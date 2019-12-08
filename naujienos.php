<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
  <title>BDN</title>
  
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
      <img src="images/s.jpg" height="25%" width="100%" align="middle">
        <p></p>
     <img src="images/v.jpg" height="25%" width="100%" align="middle">
        <p></p>
           <img src="images/k.jpg" height="25%" width="100%" align="middle">
    </div>
    <div class="col-sm-8 text-left"> 
      <fieldset>
     <h2 align="middle">News</h2>
     </fieldset>
     
      <hr>
      <h3>2019-12-04</h3>
      <p align="center">We got a new shipment of electric vehicles! To celebrate that we are having discounts! 20% off from everything.</p>
    </div>
    <div class="col-sm-2 sidenav">
      
    </div>
  </div>
</div>


<footer>
 <!--php footer-->
    <?php include('footer.php') ?>
    </footer>

</body>
</html>
