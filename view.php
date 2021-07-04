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
            <th width="100">From account number</th>
            <th width="150">Sender</th>
            <th width="100">To account number</th>
            <th width="200">Receiver</th>
            <th width="150">Amount</th>
            <th width="150">Date and time</th>
            </thead>
            <tbody>
            <?php
            include("connect.php");
            $query="SELECT * FROM `transactions`";
            $result=mysqli_query($conn,$query);
            while($row=mysqli_fetch_assoc($result)){
                $sn=$row['sender_name'];
                $frno=$row['from_accountno'];
                $tono=$row['to_accountno'];
                $rn=$row['receiver_name'];
                $amt=$row['amount_transfer'];
                $date=$row['date'].' '.$row['time'];
                echo"<tr>
                <td>$frno</td>
                <td>$sn</td>
                <td>$tono</td>
                <td>$rn</td>
                <td>$amt</td>
                <td>$date</td>
                </tr>";
            }
            ?>
            </tbody>
            </table>
       </div>   
</body>   
</html>
