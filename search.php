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
</html>

<?php 

include 'conn.php';

 ?>

 

 <?php 

if (isset($_POST['submit'])) {
	$search = $_POST['search'];
	$searchpreg =preg_replace("#[^0-9a-z]#i", "", $search);
	$query = "SELECT * FROM movie where name LIKE '%$search%' OR actors LIKE '%$search%' OR summary LIKE '%$search%' OR duration LIKE '%$search%' or genre LIKE '%$search%' or Link LIKE '%$search%' or mov_id LIKE '%$search%'";
	$run = mysqli_query($conn,$query);
	$count = mysqli_num_rows($run);
	if ($count == 0) {
		
	}
	else{
		while ($row=mysqli_fetch_assoc($run)) {
      
			?>
        <h1 style="color: Violet">Movie</h1>
     <?php
         $var =$row['name'] ;
      ?>
         <h2 style="color: Tomato";><?=$var?></h2>
            <video  width="320" height="240" src="uploads/<?=$row['Link']?>" controls> </video>
        <?php
        }
    }
    
    $query = "SELECT * FROM series where name LIKE '%$search%' OR season LIKE '%$search%' OR summary LIKE '%$search%' OR rating LIKE '%$search%' or genre LIKE '%$search%' or Link LIKE '%$search%' or se_id LIKE '%$search%'";
	$run = mysqli_query($conn,$query);
	$count = mysqli_num_rows($run);
	if ($count == 0) {
		
	}
	else{
		while ($row=mysqli_fetch_assoc($run)) {
			?>
      <h1 style="color: Violet">Series</h1>
     <?php
         $var =$row['name'] ;
      ?>
         <h2 style="color: Tomato";><?=$var?></h2>

            <video width="320" height="240" src="uploads/<?=$row['Link']?>" controls> </video>
        <?php
        }
    }
    $query = "SELECT * FROM music where name LIKE '%$search%' OR artist LIKE '%$search%' OR rating LIKE '%$search%' or genre LIKE '%$search%' or Link LIKE '%$search%' or msc_id LIKE '%$search%'";
	$run = mysqli_query($conn,$query);
	$count = mysqli_num_rows($run);
	if ($count == 0) {
		
	}
	else{
		while ($row=mysqli_fetch_assoc($run)) {
			?>

<h1 style="color: Violet">Music</h1>
<?php
$var =$row['name'] ;
?>

<h2 style="color: Tomato";><?=$var?></h2>
    
      
            <video width="320" height="240" src="uploads/<?=$row['Link']?>" controls> </video>
            
            
        <?php
        }
    }
    $query = "SELECT * FROM podcast where sports_name LIKE '%$search%' OR radio_channel LIKE '%$search%' OR Link LIKE '%$search%' OR pd_id LIKE '%$search%'";
    $run = mysqli_query($conn,$query);
    $count = mysqli_num_rows($run);
    if ($count == 0) {
      
    }
    else{
      while ($row=mysqli_fetch_assoc($run)) {
        ?>

<h1 style="color: Violet">Podcast</h1>
     

              <video width="320" height="240" src="uploads/<?=$row['Link']?>" controls> </video>
          <?php
          }
      }
}
    ?>
    
