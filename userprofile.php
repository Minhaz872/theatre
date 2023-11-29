<?php include("conn.php");
$name = $_SESSION['username'];
$sql = "SELECT * from user where username='$name'";
$result = mysqli_query($conn,$sql);
$mvsql = "SELECT * from `movie` INNER JOIN `userlist` on `movie`.`mov_id` = `userlist`.`mov_id`";
$mvresult = mysqli_query($conn,$mvsql);
$mscsql = "SELECT * from `music` INNER JOIN `userlist` on `music`.`msc_id` = `userlist`.`msc_id`";
$mscresult = mysqli_query($conn,$mscsql);
$pdsql = "SELECT * from `podcast` INNER JOIN `userlist` on `podcast`.`pd_id` = `userlist`.`pd_id`";
$pdresult = mysqli_query($conn,$pdsql);
$ssql = "SELECT * from `series` INNER JOIN `userlist` on `series`.`se_id` = `userlist`.`se_id`";
$sresult = mysqli_query($conn,$ssql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="user.css">
    <title><?php echo $_SESSION['username'];?></title>
</head>
<body>
    <div class="container">
        <nav>
        <a href="home.php">Home</a>
        <h1><?php echo $_SESSION['username'];?>'s Profile</h1>
        </nav>
        <div class="content-panel" style="margin-top: 30px;">
            <table>
                <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                </tr>
                <tr>
                <?php
                if($result ->num_rows>0){
                    while($row = $result->fetch_assoc()){
                        echo "<td>".$row['name']."</td>"."<td>".$row['email']."</td>"."<td>".$row['phone']."</td>";
                    }
                    echo "<style>
                        *{
                            color: white;
                        }
                        body{
                            overflow-x: hidden;
                        }
                        input{
                            margin-top: 5px;
                            margin-bottom: 20px;
                            padding: 5px 15px;
                            border-radius: 10px;
                            color: black;
                        }
                        body .container tr td 
                        {
                            padding: 30px;
                            text-align: center;
                            color: white;
                        }
                        body .container table {
                            display: flex;
                            justify-content: center;
                            align-items: center;
                            margin-bottom: 80px;
                        }
                        .btn:hover{
                        background-color: rgba(0,0,0,0);
                        color: white;
                        }
                        .btn:hover input{
                            background-color: rgba(0,0,0,0);
                            color: white;
                        }
                        .btn{
                        cursor: pointer;
                        }
                        body .container nav h1 {
                            text-transform: uppercase;
                            color: white;
                            position: absolute;
                            left: 43%;
                        }
                        
                        </style>";
                
                    }
                ?>
            </tr>
            </table>
        </div>
        <div class="details" style="display: flex; justify-content: space-between;">
            <div class="left-panel">
                <form action="userbioupdate.php" method="post">
                    <label for="name">Name</label><br>
                    <input type="text" name="name" required><br>
                    <label for="email">Email</label><br>
                    <input type="email" name="email" required><br>
                    <label for="phone">Phone</label><br>
                    <input type="text" name="phone" required><br>
                    <label for="password">Password</label><br>
                    <input type="text" name="password" required><br>
                    <input class="btn" type="submit" value="Update Info">
                </form>
            </div>
            <div class="right-cont" style="display: flex; flex-direction: column; margin-right: 30%;">
                <div class="right-panel">
                    <h2>Movie List</h2><br>
                    <table>
                        <tr>
                            <th>Movie Name</th>
                            <th>Duration</th>
                            <th>Genre</th>
                            <th>Rating</th>
                        </tr>
                        
                        <?php
                        if($mvresult ->num_rows>0){
                            while($row = $mvresult->fetch_assoc()){
                                echo "<tr><td>".$row['name']."</td>"."<td>".$row['duration']."</td>"."<td>".$row['genre']."</td>"."<td>".$row['rating']."</td></tr>";
                                
                            }
                        }
                        ?>
                        
                    </table>
                    <form action="userprofile.php" method="post">
                        <input type="search" placeholder="Remove which movie?" name="delt">
                        <input class="btn" type="submit" value="Delete" onClick="window.location.reload()">
                    </form>
                    <?php
                        if(isset($_POST['delt'])){
                            $mvdel = $_POST['delt'];
                            $del = "DELETE FROM `movie` WHERE `movie`.`name` = '$mvdel'";
                            mysqli_query($conn,$del);
                            
                        }
                        echo "<style>
                        .right-panel{
                        margin-right: 30%;
                        }
                        .right-panel th,.right-panel h2{
                        padding-left: 15px;
                        padding-right: 15px;
                        }
                        .right-panel input{
                            margin-left: 10px;
                        }
                        </style>"
                    ?>

                </div>
                        <br>
                        <br>
                        <hr>
                        <br>
                        <br>
                <div class="right-panel">
                    <h2>Music List</h2><br>
                    <table>
                        <tr>
                            <th>Music Name</th>
                            <th>Artist</th>
                            <th>Genre</th>
                            <th>Rating</th>
                        </tr>
                        
                        <?php
                        if($mscresult ->num_rows>0){
                            while($row = $mscresult->fetch_assoc()){
                                echo "<tr><td>".$row['name']."</td>"."<td>".$row['artist']."</td>"."<td>".$row['genre']."</td>"."<td>".$row['rating']."</td></tr>";
                                
                            }
                        }
                        ?>
                        
                    </table>
                    <form action="userprofile.php" method="post">
                        <input type="search" placeholder="Remove which music?" name="delt">
                        <input class="btn" type="submit" value="Delete" onClick="window.location.reload()">
                    </form>
                    <?php
                        if(isset($_POST['delt'])){
                            $mvdel = $_POST['delt'];
                            $del = "DELETE FROM `music` WHERE `music`.`name` = '$mvdel'";
                            mysqli_query($conn,$del);
                            
                        }
                        echo "<style>
                        .right-panel{
                        margin-right: 30%;
                        }
                        .right-panel th,.right-panel h2{
                        padding-left: 15px;
                        padding-right: 15px;
                        }
                        .right-panel input{
                            margin-left: 10px;
                        }
                        </style>"
                    ?>

                </div>
                <br>
                        <br>
                        <hr>
                        <br>
                        <br>
                <div class="right-panel">
                    <h2>Podcast List</h2><br>
                    <table>
                        <tr>
                            <th>Sport's Name</th>
                            <th>Radio Channel</th>
                            <th>News</th>
                        </tr>
                        
                        <?php
                        if($pdresult ->num_rows>0){
                            while($row = $pdresult->fetch_assoc()){
                                echo "<tr><td>".$row['sports_name']."</td>"."<td>".$row['radio_channel']."</td>"."<td>".$row['news']."</td></tr>";
                                
                            }
                        }
                        ?>
                        
                    </table>
                    <form action="userprofile.php" method="post">
                        <input type="search" placeholder="Remove which podcast?" name="delt">
                        <input class="btn" type="submit" value="Delete" onClick="window.location.reload()">
                    </form>
                    <?php
                        if(isset($_POST['delt'])){
                            $mvdel = $_POST['delt'];
                            $del = "DELETE FROM `podcast` WHERE `podcast`.`sports_name` = '$mvdel' or `podcast`.`radio_channel`='$mvdel' or `podcast`.`news` ='$mvdel'";
                            mysqli_query($conn,$del);
                            
                        }
                        echo "<style>
                        .right-panel{
                        margin-right: 30%;
                        }
                        .right-panel th,.right-panel h2{
                        padding-left: 15px;
                        padding-right: 15px;
                        }
                        .right-panel input{
                            margin-left: 10px;
                        }
                        </style>"
                    ?>

                </div>
                <br>
                        <br>
                        <hr>
                        <br>
                        <br>
                <div class="right-panel">
                    <h2>Series List</h2><br>
                    <table>
                        <tr>
                            <th>Series Name</th>
                            <th>Seasons</th>
                            <th>Genre</th>
                            <th>Rating</th>
                        </tr>
                        
                        <?php
                        if($sresult ->num_rows>0){
                            while($row = $sresult->fetch_assoc()){
                                echo "<tr><td>".$row['name']."</td>"."<td>".$row['season']."</td>"."<td>".$row['genre']."</td>"."<td>".$row['rating']."</td></tr>";
                                
                            }
                        }
                        ?>
                        
                    </table>
                    <form action="userprofile.php" method="post">
                        <input type="search" placeholder="Remove which series?" name="delt">
                        <input class="btn" type="submit" value="Delete" onClick="window.location.reload()">
                    </form>
                    <?php
                        if(isset($_POST['delt'])){
                            $mvdel = $_POST['delt'];
                            $del = "DELETE FROM `series` WHERE `series`.`name` = '$mvdel'";
                            mysqli_query($conn,$del);
                            
                        }
                        echo "<style>
                        .right-panel{
                        margin-right: 30%;
                        }
                        .right-panel th,.right-panel h2{
                        padding-left: 15px;
                        padding-right: 15px;
                        }
                        .right-panel input{
                            margin-left: 10px;
                        }
                        </style>"
                    ?>

                </div>
            
            </div>
        </div>
    </div>
</body>
</html>