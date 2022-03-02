<!DOCTYPE html>
<html lang="en">
<head>
    <?php   include 'link.php' ?>
    <title>HTML Project 3</title>
</head>
<body bgcolor="brown">
    <table align="center" border="0" cellpadding="0" cellspacing="0" height="900" width="900">
        <tr>
            <td colspan="4" height="485" width="1100"><img src="Images/header.png" alt="logo_of_fashion" height="485" width="900"></td>
            
        </tr>
        <tr height="45" width="1100">
            <td><a href="htmlproject3.html"><img src="Images/home.jpg" alt="logo_of_home" height="45" width="225"></a></td>
            <td><a href="htmlproject3aboutus.html"><img src="Images/about_us.jpg" alt="logo_of_aboutus" height="45" width="225"></a></td>
            <td><a href="htmlproject3fashionportfolio.html"><img src="Images/fashion_portfolio.jpg" alt="logo_of_fashionport" height="45" width="225"></a></td>
            <td><a href="htmlproject3contactus.html"><img src="Images/contact_us.jpg" alt="logo_of_fashioncontact" height="45" width="225"></a></td>
        </tr>
        <tr>
            <td colspan="3">
                <p><b>Contact Us</b><br><br>We are always happy to hear from you. If you have any questions or comments, feel free to contact us by using the form below and we'll get back to you soon.</p>
                <form action="" method="POST">
                    <label>Email</label>
                    <input type="email" placeholder="Enter your email" name="email" required>
                    <br><br>
                    <label>Subject</label>
                    <input type="text" name="subject" placeholder="Enter your subject" required>
                    <br><br><br>
                    <label>Textarea</label><br>
                    <textarea cols="30" rows="6" required name="textarea"></textarea>
                    <br>
                    <button name="submit">Submit</button>
                    <!-- <button name="reset">Reset</button> -->
                </form>
            
            </td>
            
            <td><img src="Images/Silhouette.png" alt="logo_silhouette"></td>
        </tr>
        <tr align="center" bgcolor="lightpink">
            <td colspan="4">9/7/11</td>
            
            
        </tr>
    </table>
    
</body>
</html>


<?php

include 'connection.php';

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $textarea = $_POST['textarea'];

    $insertquery = " insert into inqarytable(Email, subject, textarea) values('$email', '$subject', '$textarea') ";
    // INSERT INTO `inqarytable`(`serial no`, `Email`, `subject`, `textarea`) VALUES ('[$email]','[$subject]','[$textarea]','[value-4]')

    $result = mysqli_query($con, $insertquery);

    if($result){
        ?>
        <script>
            alert('Data Successfully Submitted');
        </script>
        <?php
    }else{
        ?>
        <script>
            alert('Due to technical issue data is not insert');
        </script>
        <?php
    }
}

?>