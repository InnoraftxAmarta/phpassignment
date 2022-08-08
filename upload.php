<?php
    $fnameErr = $lnameErr = "";
    $fname = $lname = "";

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(empty($_POST["fname"])) {
            $fnameErr = "first Name is required";
        }
        else {
            $fname = test_input($_POST["fname"]);
            if(!preg_match("/^[a-zA-z]*$/",$fname))
            {
                $fnameErr = "Only letters and white space are allowed";
            }
        }
        if(empty($_POST["lname"])) {
            $lnameErr = "Last Name is required";
        }
        else {
            $lname = test_input($_POST["lname"]);
            if(!preg_match("/^[a-zA-Z-']*$/",$lname))
            {
                $lnameErr = "Only letters and white space are allowed";
            }
        }
        
    }
    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data; 
    }
?>
<?php
$fullname = $fname." ".$lname ;
?>
<?php
echo "<h2> Your input :<h2>";
echo "<h2>$fullname</h2>";
echo " <br> ";
?>