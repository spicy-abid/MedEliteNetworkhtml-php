<?php

include("../../controller/doctorControll/doctorProfileProcess.php");
?>
<DOCTYPE html>

    <html>
        <head>
        <meta charset="UTF-8">
    <meta http-equiv="refresh" >
            <title>Doctor Profile</title>
</head>
        <body>
            

<form action="", method="POST" align="center">
    <center>
        <h1>
            Hello Doctor  <?php echo $fname ."&nbsp;". $lname ."<br>"; ?>

        </h1>

                
    </center>
    
</form>
<!-- check? -->
<fieldset >
<legend>Profile</legend>
<form action="" method="POST" enctype="multipart/form-data">
    
        
        <table border="1">
            <tr>
                <td>
                    <img src="<?php echo $profilePic;?>" /><br>
                    
                </td>
            </tr>
        </table>
       <input type="file"  id="profilePic" name="profilePic">   <br>
    <input type="submit" name="update" value="update">Profile Picture<br>
    <?php echo $profilePicError; ?>

    
   
    


     
    
</form>
<form action="" method="post">
    <h3>
 
Fee's<input type="number" name="money" Id="money">
    <input type="submit" name="set" value="Set" ><br>
    <?php echo $feeError; ?><br>
    <!-- <input type="submit" name="free" value="Free" ><br> -->

    </h3>
    </form>
    <form action="" method="post">
        <?php echo $available; ?>&nbsp; Status:
        
        <select name="availability" id="availability">
            <option value="">None</option>
            <option value="Available">Available</option>
            <option value="Unavalable">Unavalable</option>
        </select>
        
        <input type="submit" name="change" value="Change">
        <?php echo $avalError; ?><br>
        

    </form>


    <br><br><br><br>
    <a href='../../controller/doctorControll/logoutProcess.php' >Logout </a>

</fieldset>

<h2>

<a href="patientRecord.php">Patient Record</a> <br>
</h2>

<footer>
        Author: Hossain, Md Abid
        <br>
        <a href="abidhossain6781@gmail.com">E-mail</a>
    </footer>
</body>
</html>