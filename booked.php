<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMINISTRATOR</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<style>
*{
    margin: 0;
    padding: 0;

}
.hai{
    width: 100%;
    background: linear-gradient(to top, rgba(0,0,0,0)50%, rgba(0,0,0,0)50%),url("hero-background.jpg");
    background-position: center;
    background-size: cover;
    height: 110vh;
}
.main{
    width: 100%;
    background: linear-gradient(to top, rgba(0,0,0,0)50%, rgba(0,0,0,0)50%);
    background-position: center;
    background-size: cover;
}
.navbar{
    width: 1200px;
    height: 75px;
    margin: auto;
}

.icon{
    width:200px;
    float: left;
    height : 70px;
}

.logo{
    color: #ff7200;
    font-size: 35px;
    font-family: Arial;
    padding-left: 20px;
    float:left;
    padding-top: 10px;

}
.menu{
    width: 400px;
    float: left;
    height: 70px;

}

ul{
    float: left;
    display: flex;
    justify-content: center;
    align-items: center;
}

ul li{
    list-style: none;
    margin-left: 62px;
    margin-top: 27px;
    font-size: 14px;

}

ul li a{
    text-decoration: none;
    color: black;
    font-family: Arial;
    font-weight: bold;
    transition: 0.4s ease-in-out;

}

.content-table{
    background-color: rgba(0,0,0,0.6);
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
    color: #fff;
    margin: auto;
    font:bold;
}
.content-table thead tr{
    color: #fff;
    margin: auto;
    font:bold;
    text-align: left;
}

.content-table th,
.content-table td{
    padding: 12px 15px;
    border-bottom: 1px solid #dddddd;


}

.content-table tbody tr{
    border-bottom: 1px solid #dddddd;
}





.header{
    margin-top: -700px;
    margin-left: 750px;
    color: white;
}


.nn{
    width:100px;
    /* background: #ff7200; */
    border:none;
    height: 40px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    color:white;
    transition: 0.4s ease;

}


.nn a{
    text-decoration: none;
    color: black;
    font-weight: bold;
    
}

.add {
    width: 200px;
    height: 40px;
    margin: 0 auto; /* Center align horizontally */
    background: #3b0f67;
    border: none;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    color: #fff;
    transition: 0.4s ease;
    display: block; /* Make it a block element to center align */
}

.add:hover {
    background: #542288;
    transform:scale(1.1);/* Change background color on hover */
}

.add a{
    text-decoration: none;
    color: white;
    font-weight: bolder;
    
}
.but{
    width: 150px;
    height: 30px;
    background: #542288;;
    border: none;
    font-size: 18px;
    border-radius: 5px;
    cursor: pointer;
}
.but:hover{
    transform: scale(1.1) ;
    transition:0.5s;
}

.but a{
    text-decoration: none;
    text:bold;
    color: white;
}
</style>    
<?php


    $con = mysqli_connect('localhost','root','','users0123');
    if(!$con)
    {
        echo 'please check your Database connection';
    }
$query="SELECT *from booking";    
$queryy=mysqli_query($con,$query);
$num=mysqli_num_rows($queryy);


?>
<div class="hai"><header>
       
            <div class="icon">
                <h2 class="logo">CarRental</h2>
            </div>
            <div class="menu">
            <div class="nav">
                <ul>
                    <li><button class="nn"> <a href="admindash.php">ALL CARS</a></li>
                  <li> <button class="nn"><a href="index.php">LOGOUT</a></button></li>
                </ul>
            </div>
         </div>
</header>

         </div>
        <div >
            <br>
            <br>
            <h1 class="header">CARS</h1>
           <br>
            <div>
                <div>
                    <table class="content-table">
                <thead>
                    <tr>
                        
                        <th>BOOKING PLACE</th>
                        <th>BOOKING DATE</th>
                        <th>DURATION</th>
                        <th>PHONE NUMBER</th>
                        <th>PRICE</th>
                        <th>DESTINATION </th>
                        <th>Return date</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                
                
                while($res=mysqli_fetch_array($queryy)){
                
                
                ?>
                <tr  class="active-row">
                    
                    <td><?php echo $res['BOOK_PLACE'];?></php></td>
                    <td><?php echo $res['BOOK_DATE'];?></php></td>
                    <td><?php echo $res['DURATION'];?></php></td>
                    <td><?php echo $res['PRICE'];?></php></td>
                    <td><?php echo $res['PHONE_NUMBER'];?></php></td>
                    <td><?php echo $res['DESTINATION'];?></php></td>
                    <td><?php echo $res['RETURN_DATE'];?></php></td>
                    
                    
                </tr>
               <?php } ?>
                </tbody>
                </table>
                <br>
               
                </div>
            </div>
            <br></br>
         <br></br>
         <br></br>
         
        </div>
        
</body>
</html>