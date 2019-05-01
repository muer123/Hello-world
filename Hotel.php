<?php

require('DB.php');

$query  = "SELECT id, room_type, price "; 
$query .= "FROM room ";


$result = mysqli_query($connection, $query);

if (!$result) {
    die("query is wrong");
}

?>
<html>
    <head>
    <title>Prince Al's Royal Hotel</title>
    <meta charset="utf-8">
    <link type='text/css' rel='stylesheet' href='hotel.css'>
    </head>
    <body>
        <div class="menu">
        <ul class="heading">
            <li><a href="Hotel.php"><b>Home</b></a></li>
            <li><a href="login.php"><b>Login</b></a></li>
            <li><a href="register.php"><b>register</b></a></li>
            <li><a href="about.php"><b>About Us</b></a></li>
        </ul>
        </div> 
        <div class="header">
        <h3>Prince Al's Royal Hotel</h3>
        </div>
        <div class="bg">
        </div>
        <div class="lss">
		<ul class="lis">
            <li><a href="accommodations">Accommodations</a></li>
            <li><a href="facilities.php">Facilities</a></li>
            <li><a href="restaurants.php">Restaurants</a></li>
            <li><a href="staff.php">Staff</a></li>
            <li><a href="manager.php">manager</a></li>
		</ul>
        </div>
        <p align='left'><b>Today's price</b></p>
        <table width="250px" border="double" align="left">
        <tr>
        <td>room type</td>
        <td>price</td>
        </tr>
<?php    
//  use/show data
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row["room_type"] . "</td>";
    echo "<td>" . $row["price"] . "</td>";
    echo "</tr>";
}
?>
        </table>
        <div class="box">
        <form action="" method="post" class="sou">
        <input type="datetime-local" value="2019-05-01T12:00:00"/ class="date"><br/><br/>
        <input type="text" name="search" placeholder="INPUT location" class="search">
        <input type="button" name="search" value="search" class="but">
        </form>
        </div>
        <div class="bgound">
        <img src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1555441294691&di=9237916da78fd760611403982425214d&imgtype=0&src=http%3A%2F%2Fwww1.pchouse.com.cn%2Fsheji%2Fthirdspace20140707%2Fdatu07.jpg"/>
        <img src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1555441437884&di=38dae0780613851c439f5cda4bc863ae&imgtype=0&src=http%3A%2F%2Fimg.article.pchome.net%2F00%2F25%2F67%2F04%2Fpic_lib%2Fs960x639%2F14s960x639.jpg"/>
        <img src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1555441042146&di=761c89f5af7f6e8186e422af569eb8d9&imgtype=0&src=http%3A%2F%2Fimages6.fanpop.com%2Fimage%2Fphotos%2F37200000%2FDessert-food-37262256-2560-1600.jpg"/>
        <img src="http://www.xinhuanet.com/world/2015-01/01/127346691_14199882432101n.jpg"/>
        </div>
    </body>
</html>