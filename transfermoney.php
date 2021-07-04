<?php
session_start(); 
if(isset($_POST['submit'])){
    $_SESSION['row']=$_POST['submit'];
    header("Location: Transaction.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head> 
<body>   
    <div class="header">
        <nav>  
                <div>  
                    <a href = "home.php" class ="logo"><img src="images/logo.jpg" alt="can't load the logo"></a>
                    <ul id="navigation">
                    <li class="selected">
                        <a href="home.php">Home</a>
                    </li>
                    <li>
                        <a href="home.php#about">About</a>
                    </li>
                    <li class="pics">
                        <a href="home.php#service">Services</a>
                    </li>
                    <li>
                        <a href="home.php#contact">ContactUs</a>
                    </li>
                    </ul>
                </div>
        </nav>
        </div>
       <div class="money">
           <h1 id="h1">Transfer Money</h1>
           <table width="50%" cellspacing="0">
            <thead>
            <th width="100">Account no</th>
            <th width="150">Name</th>
            <th width="200">E-mail</th>
            <th width="150">Balance</th>
            <th width="150">operation</th>
            </thead>
            <tbody>
            <?php 
                    include("connect.php");
                    $query="SELECT * FROM `customer_details`";
                    $result=mysqli_query($conn,$query);
                    $fn=1;
                    while($row=mysqli_fetch_assoc($result)){
                    $accountno=$row['account_no'];
                    $name=$row['first_name'].$row['last_name'];
                    $email=$row['email'];
                    $bal=$row['bank_balance']; 
                    echo "<tr>
                    <td>$accountno</td>
                    <td>$name</td>
                    <td>$email</td>
                    <td>$bal</td>
                    <form action='transfermoney.php' method='POST'>
                    <td><button class='btn' value='$fn' name='submit'>View and Transfer</button></td>
                    </form>
                    </tr> ";
                    $fn+=1;
                    }
            ?>
            </tbody>
            </table>
       </div>   
</body>
</html>
