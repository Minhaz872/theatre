<?php include("conn.php");
session_start();
$music = "SELECT * FROM `music`";
$mscresult = mysqli_query($conn,$music);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./frontend/images/fav.ico" type="image/x-icon">
  <title>The Atre</title>
  <link rel="stylesheet" href="hstyle.css">
</head>
<body>
  <nav>
    <a href="viewmovie.php">Movies</a>
    <a href="viewseries.php">Series</a>
    <a href="viewpod.php">Podcast</a>
    <a href="viewmusic.php">Music</a>
    <form action="search.php" method="post">
       <input type="search" name="search" placeholder="Search...">
       <button class="btn btn-primary" name="submit" type="submit">Search</button>
  </form>
    <h2><a href="userprofile.php">Profile</a></h2>
    <a href="logout.php">Logout</a>
  </nav>
     
   
   <div class="banner">
      <div class="banner_contents">
        <h1 class="banner_title">Money Heist</h1>
        <div class="banner_buttons">
          <button class="banner_button">Play</button>
          <button class="banner_button">My List</button>
        </div>
      </div>
   </div>   
   <pre>
 <h1> <p style="color: whitesmoke;margin-left: 20px;font-family: Arial, Helvetica, sans-serif;">Trending Now</p></h1>
 
   </pre>                 

  <div class="row">
    <h2 id="music">MUSIC</h2>
    <div class="row_posters">
      <?php
      $index = 1;
      $loc = "./MUSIC/mu".$index.".php";
      while($row = $mscresult->fetch_assoc()){
        echo
        "
        <form action='".$loc."' style='display: flex; flex-direction: column;'method='post'>
        <img src='MUSIC/".$index.".jpg' class='row poster'/>
        <input style='display: none;'type='number' name='".$index."' value='1'>
        <input type='submit' value='Watch Now'>
        </form>
        ";
        $index +=1;
      }
      ?>
    </div>
  </div>


  <div class="row">
    <h2 id="series">SERIES</h2>
      <div class="row_posters">
        <img src="SERIES/s1.jpg" class="row poster"/>
        <img src="SERIES/s2.jpg" class="row poster"/>
        <img src="SERIES/s3.jpg" class="row poster"/>
      </div>
  </div>

  
   

  <div class="row">
    <h2 id="podcast">PODCAST</h2>
    <div class="row_posters">
        <img src="PODCAST/p1.jpg" class="row poster"/>
        <img src="PODCAST/p2.jpg" class="row poster"/>
        <img src="PODCAST/p3.jpg" class="row poster"/>
      </div>
  </div>  

  <div class="row">
  <h2 id="movies">MOVIES</h2>
    <div class="row_posters">
      <img src="MOVIES/m1.jpg" class="row poster"/>
      <img src="MOVIES/m2.jpg" class="row poster"/>
      <img src="MOVIES/m3.jpg" class="row poster"/>          
    </div>
  </div>
           
  
</body>
</html>