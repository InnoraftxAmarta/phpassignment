<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
   


<div class="fullcontainer">
<h2>Form validation</h2>
<p> <span class="error">* required field</span> </p>

<form method="post" action="upload.php">  
  
First Name: <input type="text" name="fname" value="<?php echo $fname;?>" id="fname" onkeyup = "myfullname()">

  <span class="error">* <?php echo $fnameErr;?></span> <br> <br>
  
Last Name: <input type="text" name="lname" value="<?php echo $lname;?>" id="lname" onkeyup = "myfullname()">
  
    <span class="error">* <?php echo $lnameErr;?></span> <br> <br>
    <br><br>

Full Name: <input type="text" name="fullname" id="fullname" disabled value="<?php echo $fullname; ?>" > <br> <br>
    


    <input type="submit" name="submit" value="Submit">  
</form>
</form>


</div>
<script>
    function myfullname(){
        var firstname = document.getElementById("fname").value;
        var lastname = document.getElementById("lname").value;
        document.getElementById("fullname").value = firstname + " " +  lastname;
    }
</script>
</body>
</html>