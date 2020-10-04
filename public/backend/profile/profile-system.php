<?php
    if(isset($_POST['submit']))
    {
     if(getimagesize($_FILES['image']['tmp_name'])==FALSE)
     {
        echo " error ";
     }
     else
     {
        $image = $_FILES['image']['tmp_name'];
        $image = addslashes(file_get_contents($image));
        saveimage($image);
     }
    }
    function saveimage($image)
    {
        $dbcon=mysqli_connect('localhost','root','Lostsaga135','fatechid_account');
        $qry="INSERT into photo (image) values ('$image')";
        $result=mysqli_query($dbcon,$qry);
        if($result)
        {
            echo " <br/>Image uploaded.";
            header('location:index.php');
        }
        else
        {
            echo " error ";
        }
    }
?>