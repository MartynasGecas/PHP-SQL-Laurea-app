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
     
input[type=text], select, textarea {
  width: 100%; 
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px; 
  box-sizing: border-box; 
  margin-top: 6px;
  margin-bottom: 16px; 
  resize: vertical 
}


input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}


input[type=submit]:hover {
  background-color: #45a049;
}


.container {
  border-radius: 5px;
  background-color: #f2f2f2;
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
     <h2 align="middle">Contacts</h2>
     </fieldset>
        <br>
      <p>Address: Birutės 19, Birštonas 59217, Lithuania</p>
      <p>Phone: +370 640 26638</p>
      <hr>
	  <!--feedback form that submits to feedback.php-->
     <form method="post" action="feedback.php">

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="name" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="last" placeholder="Your last name..">
         
    <label for="lname">Email</label>
    <input type="text" id="email" name="email" placeholder="Your Email Adress...">

    <label for="subject">Subject</label>
    <textarea id="subject" name="sub" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">

  </form>
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
