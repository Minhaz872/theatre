<?php include("../conn.php");
// $msid = $index;
$sql = "SELECT `msc_id`,`name`,`artist`,`rating`,`genre`,`link` FROM `music` WHERE `msc_id` = '1'";
$result = mysqli_query($conn, $sql);
while($rows = $result->fetch_assoc()){
    $mid = $rows['msc_id'];
    $mname = $rows['name'];
    $artist = $rows['artist'];
    $genre = $rows['genre'];
    $rating = $rows['rating'];
    $link = $rows['link'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300,600&display=swap" rel="stylesheet">
    <title>Artic Monkeys</title>
</head>
<body style="font-family: 'Work Sans', sans-serif; color: white; background: linear-gradient(90deg, rgba(2,0,36,1) 1%, rgba(121,9,56,1) 53%, rgba(74,87,131,1) 100%, rgba(0,212,255,1) 100%);">
    <div class="container" style="
    width: 100%; height: 100vh; display: flex; justify-content: start; flex-direction: column;">
        <div class="video-panel" style="background-color: black; width: 100%; display: flex; justify-content: center;border-radius: 30px;">
        <video src="m.mp4" style="" controls></video>
        </div>
        <div class="desc-panel" style="display: flex; justify-content:space-between; padding: 50px 30px;">
            <div class="img-src" style="margin-right: 30px;">
            <?php
            echo 
            "<img src='".$mid.".jpg'>";
            ?>
            </div>
            <div class="desc" style="margin-right: 35%">
                <?php
                    echo 
                    "
                    <h2> Music Name: ".$mname."</h2>
                    <h4>Artist: ".$artist."</h4>
                    <h4>Genre: ".$genre."</h4>
                    <h4>Rating: ".$rating." / 5</h4>
                    ";
                ?>
            </div>
        </div>
    </div>
</body>
</html>