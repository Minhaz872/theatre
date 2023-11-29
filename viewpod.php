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
    <a href="logout.php">Logout</a>
    <a href="home.php">Home</a>
    <a href="viewmovie.php">Movies</a>
    <a href="viewseries.php">Series</a>
    <a href="viewpod.php">Podcast</a>
    <a href="viewmusic.php">Music</a>
    <form class="form-inline my-2 my-lg-0" action="search.php" method="post">
    
  <input class="form-control mr-sm-6" name= "search" type="search" placeholder="search movie,series, music, podcast" aria-label="search" aria-describedby="basic-addon2">
  <button class="btn btn-primary" name="submit" type="submit">Search</button>

</form>
  </nav>
</body>

<?php 

include 'conn.php';

$files = glob("uploads/podcast/*.*"); for ($i=0; $i<count($files); $i++) { $num = $files[$i]; 
print '<video width="300" height="240" controls>
<source src="'.$num.'" type="video/mp4" />';
echo '<object id="flowplayer" data="flowplayer-3.2.2.swf" type="application/x-shockwave-flash" width="300" height="240" >
<param name="movie" value="flowplayer-3.2.2.swf">
<param name="allowfullscreen" value="true">
<param name="flashvars" value="config={"clip":{"url":"'.$num.'","autoPlay":false}}">
</object> 
</video>';
}
?>
</html>
