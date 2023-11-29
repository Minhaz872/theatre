<?php
$host="192.162.0.7";
$user="root";
$pass="Huawei@2023";
$db="theatre";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn){
    echo ("Sorry! We failed to connect to server.".mysqli_connect_error());
} 
else{
    // Movie add 
    if (isset($_POST['insert1'])){
        $id= $_POST["mov_id"];
        $name= $_POST["mov_name"];
        $genre= $_POST["mov_genre"];
        $duration= $_POST["duration"];
        $summary= $_POST["mov_summary"];
        $actor= $_POST["actors"];
        $link= $_POST["mov_link"];
        $ratings= $_POST["mov_ratings"];

        $q = "insert into  movie (mov_id, name, duration, summary, actors, rating, genre , Link) values ('$id','$name','$duration','$summary','$actor','$ratings','$genre','$link')";
        $result = mysqli_query($conn, $q);
        if ($result){
            echo "Inserted successfully";
        }
        else{
            echo "Query unsuccessful";
        }
        
    }
    // Movie Remove
    if (isset($_POST['remove1'])){
        $id= $_POST["mov_id"];
        $q = "delete from movie where mov_id=('$id')";
        $result = mysqli_query($conn, $q);
        if ($result){
            echo "Removed successfully";
        }
        else{
            echo "Query unsuccessful";
        }
        
    }

        // Series add 
        if (isset($_POST['insert2'])){
            $id= $_POST["se_id"];
            $name= $_POST["se_name"];
            $genre= $_POST["se_genre"];
            $season= $_POST["season"];
            $summary= $_POST["se_summary"];
            $link= $_POST["se_link"];
            $ratings= $_POST["se_ratings"];
    
            $q = "insert into  series (se_id, name, season, summary, rating, genre , Link) values ('$id','$name','$season','$summary','$ratings','$genre','$link')";
            $result = mysqli_query($conn, $q);
            if ($result){
                echo "Inserted successfully";
            }
            else{
                echo "Query unsuccessful";
            }
            
        }
        // Series Remove
        if (isset($_POST['remove2'])){
            $id= $_POST["se_id"];
            $q = "delete from series where se_id=('$id')";
            $result = mysqli_query($conn, $q);
            if ($result){
                echo "Removed successfully";
            }
            else{
                echo "Query unsuccessful";
            }
            
        }
        // Music add 
        if (isset($_POST['insert3'])){
            $id= $_POST["msc_id"];
            $name= $_POST["msc_name"];
            $genre= $_POST["msc_genre"];
            $artist= $_POST["artist"];
            $link= $_POST["msc_link"];
            $ratings= $_POST["msc_ratings"];
    
            $q = "insert into  music (msc_id, name, artist, rating, genre , Link) values ('$id','$name','$artist','$ratings','$genre','$link')";
            $result = mysqli_query($conn, $q);
            if ($result){
                echo "Inserted successfully";
            }
            else{
                echo "Query unsuccessful";
            }
            
        }
        // Music Remove
        if (isset($_POST['remove3'])){
            $id= $_POST["msc_id"];
            $q = "delete from music where msc_id=('$id')";
            $result = mysqli_query($conn, $q);
            if ($result){
                echo "Removed successfully";
            }
            else{
                echo "Query unsuccessful";
            }
            
        }

        // Podcast add 
        if (isset($_POST['insert4'])){
            $id= $_POST["pd_id"];
            $sports_n= $_POST["sports_n"];
            $sports= $_POST["sports"];
            $fmradio_n= $_POST["fmradio_n"];
            $fmradio= $_POST["fmradio"];
            $news= $_POST["news"];
    
            $q = "insert into  podcast (pd_id, sports_name, sports_link, radio_channel, channel_link , news) values ('$id','$sports_n','$sports','$fmradio_n','$fmradio','$news')";
            $result = mysqli_query($conn, $q);
            if ($result){
                echo "Inserted successfully";
            }
            else{
                echo "Query unsuccessful";
            }
            
        }
        // Podcast Remove
        if (isset($_POST['remove4'])){
            $id= $_POST["pd_id"];
            $q = "delete from podcast where pd_id=('$id')";
            $result = mysqli_query($conn, $q);
            if ($result){
                echo "Removed successfully";
            }
            else{
                echo "Query unsuccessful";
            }
            
        }

}


?>

<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Control Panel</title>         
     <!--  Bootstrap thing -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="admin.css">

</head>
<body>
<nav>
<h1>Admin Control Panel</h1>
<a href="home.php"><h1>Home</h1></a>
</nav>
<div id="admin-center">

    <form action="adminpage.php" method="post">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        
                        <!-- <hr class="mb-3"> -->
                        <p style = "font-size:30px">Movie</p>

                        <label for="mov_id"><b>Movie ID</b></label>
                        <input class="form-control" type="text" name="mov_id" required>

                        <label for="mov_name"><b>Name Of Movie</b></label>
                        <input class="form-control" type="text" name="mov_name">

                        <label for="mov_genre"><b>Genres</b></label>
                        <input class="form-control" type="text" name="mov_genre">

                        <label for="duration"><b>Duration Of Movie</b></label>
                        <input class="form-control" type="text" name="duration">

                        <label for="mov_summary"><b>Summary</b></label>
                        <input class="form-control" type="text" name="mov_summary">

                        <label for="actors"><b>Actors</b></label>
                        <input class="form-control" type="text" name="actors">

                        <label for="mov_link"><b>Link</b></label>
                        <input class="form-control" type="text" name="mov_link">

                        <label for="mov_ratings"><b>Movie Ratings</b></label>
                        <input class="form-control" type="number" step="0.01" name="mov_ratings">
                        <hr class="mb-3">
                        <input class="btn btn-primary" type="submit" name="insert1" value="Add">
                        <input class="btn btn-primary" type="submit" name="remove1" value="Remove">
                    </div>
                </div>
            </div>

    </form>

</div>


<div>

    <form action="adminpage.php" method="post">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <hr class="mb-3">
                        <p style = "font-size:30px">Series</p>
                        <label for="se_id"><b>Series ID</b></label>
                        <input class="form-control" type="text" name="se_id" required>

                        <label for="se_name"><b>Name Of Series</b></label>
                        <input class="form-control" type="text" name="se_name">

                        <label for="se_genre"><b>Genres</b></label>
                        <input class="form-control" type="text" name="se_genre">

                        <label for="season"><b>Seasons</b></label>
                        <input class="form-control" type="number" name="season">

                        <label for="se_summary"><b>Summary</b></label>
                        <input class="form-control" type="text" name="se_summary">

                        <label for="se_link"><b>Link</b></label>
                        <input class="form-control" type="text" name="se_link">

                        <label for="se_ratings"><b>Series Ratings</b></label>
                        <input class="form-control" type="number" step="0.01" name="se_ratings">

                        <hr class="mb-3">
                        <input class="btn btn-primary" type="submit" name="insert2" value="Add">
                        <input class="btn btn-primary" type="submit" name="remove2" value="Remove">

                    </div>
                </div>
            </div>

    </form>

    <form action="adminpage.php" method="post">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <hr class="mb-3">
                        <p style = "font-size:30px">Music</p>
                        <label for="msc_id"><b>Music ID</b></label>
                        <input class="form-control" type="text" name="msc_id" required>

                        <label for="msc_name"><b>Name Of Music</b></label>
                        <input class="form-control" type="text" name="msc_name">

                        <label for="msc_genre"><b>Genres</b></label>
                        <input class="form-control" type="text" name="msc_genre">

                        <label for="artist"><b>Artist</b></label>
                        <input class="form-control" type="text" name="artist">

                        <label for="msc_link"><b>Link</b></label>
                        <input class="form-control" type="text" name="msc_link">

                        <label for="msc_ratings"><b>Music Ratings</b></label>
                        <input class="form-control" type="number" step="0.01" name="msc_ratings">

                        <hr class="mb-3">
                        <input class="btn btn-primary" type="submit" name="insert3" value="Add">
                        <input class="btn btn-primary" type="submit" name="remove3" value="Remove">

                    </div>
                </div>
            </div>

    </form>

    <form action="adminpage.php" method="post">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <hr class="mb-3">
                        <p style = "font-size:30px">Podcast</p>
                        <label for="pd_id"><b>Podcast ID</b></label>
                        <input class="form-control" type="text" name="pd_id" required>

                        <label for="sports_n"><b>Sports Name</b></label>
                        <input class="form-control" type="text" name="sports_n">

                        <label for="sports"><b>Sports Link</b></label>
                        <input class="form-control" type="text" name="sports">

                        <label for="fmradio_n"><b>FM Channel</b></label>
                        <input class="form-control" type="text" name="fmradio_n">

                        <label for="fmradio"><b>FM Channel Link</b></label>
                        <input class="form-control" type="text" name="fmradio">

                        <label for="news"><b>News and Politics link</b></label>
                        <input class="form-control" type="text" name="news">

                        <hr class="mb-3">
                        <input class="btn btn-primary" type="submit" name="insert4" value="Add">
                        <input class="btn btn-primary" type="submit" name="remove4" value="Remove">
                     </div>
                </div>
            </div>

    </form>

</div>

</body>
</html>