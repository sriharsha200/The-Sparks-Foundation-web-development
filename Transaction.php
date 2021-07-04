<?php
 session_start();
 if(isset($_POST['submit'])){
    $fname=$_POST['transfer'];
    $a=$_POST['amt'];
    include("connect.php");
    if($a==''){
        echo "<script> alert('Please enter the proper name and amount')</script>";
    }
    else if($fname==""){
        echo "<script> alert('Please enter the proper name and amount')</script>";
    }
    else{
    $query="SELECT * FROM `customer_details` WHERE `first_name`='$fname'";
    $result=mysqli_query($conn,$query);
    $numrows=mysqli_num_rows($result);
    if($numrows){
        $accountno=$_SESSION['accountno'];
        $name=$_SESSION['nam'];
        $bal=$_SESSION['bal'];
        $row=mysqli_fetch_assoc($result);
        $acno=$row['account_no'];
        $ba=$row['bank_balance'];
        date_default_timezone_set("Asia/Kolkata");
        $date=date('d/m/y');
        $time=date("h:i");
        if($a<=$bal){
        $newsa=$bal-$a;
        $newra=$ba+$a;
        $q="UPDATE `customer_details` SET `bank_balance`=$newsa WHERE `account_no`=$accountno";   
        mysqli_query($conn,$q);
        $q="UPDATE `customer_details` SET `bank_balance`=$newra WHERE `account_no`=$acno";   
        mysqli_query($conn,$q); 
        $q="INSERT INTO `transactions` VALUES('$name',$accountno,'$fname',$acno,$a,'$date','$time')";
        mysqli_query($conn,$q);
        echo "<script> alert('money transfer successfully completed') </script>";
        }
        else{
            echo "<script> alert('Account Balance not enough') </script>";
        }
    }
    else{
        echo "<script> alert('Please check the name and try again') </script>";

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
       <div>
           <h1 id="h1">Transfer Money</h1>
           <table width="50%" cellspacing="0">
            <thead>
            <th width="100">customer id</th>
            <th width="150">Name</th>
            <th width="200">E-mail</th>
            <th width="150">Balance</th>
            </thead>
            <tbody>
            <?php
            include("connect.php");
            $r=$_SESSION['row'];
            $i=0;
            $query="SELECT * FROM `customer_details`";
            $result=mysqli_query($conn,$query);
            while($row=mysqli_fetch_assoc($result)){
                if($i==$r-1){
                    $accountno=$row['account_no'];
                    $_SESSION['accountno']=$accountno;
                    $name=$row['first_name'].' '.$row['last_name'];
                    $_SESSION['nam']=$name;
                    $email=$row['email'];
                    $bal=$row['bank_balance'];
                    $_SESSION['bal']=$bal; 
                    break;
                }
                $i+=1;
            }
            echo "<tr>
            <td>$accountno</td>
            <td>$name</td>
            <td>$email</td>
            <td>$bal</td>
            </tr>";
            ?>
            </tbody>
            </table>
        <form action="Transaction.php" method="POST">
       </div>
       <div class='transfer'>  
       <div>
       <div><label>Transfer To:</label></div> 
       <select style="text-align:center;width:28vw;height:5vh" name="transfer" id="">
       <option style='text-align:center;width:28vw;height:5vh' value=''>Select customer</option>
       <?php
       $query="SELECT * FROM `customer_details`";
       $result=mysqli_query($conn,$query);
       while($row=mysqli_fetch_assoc($result)){
       $name1=$row['first_name'].' '.$row['second_name'];
       if($name!=$name1){
       echo "<option style='text-align:center;width:28vw;height:5vh' value='$name1'>$name1</option>";
        }
    }
       ?>
       </select>
       </div>
       <div class="in">
       <div><label>Amount:</label></div>
       <div><input name='amt' type="number" style="text-align:center;width:28vw;height:5vh"></div>
       </div>
       <div class="in">
       <input type="submit" name='submit' style="text-align:center;width:28vw;height:5vh">
       </div>
       </form>
       </div>
    </body>
</html>
