<?php
/* the purpose of this page is to accept the hashed date joined and primary key  
 * as passed into this page in the GET format.
 * 
 * I retrieve the date joined from the table for this person and verify that 
 * they are the same. After which i update the confirmed field and acknowlege 
 * to the user they were successful. Then i send an email to the system admin 
 * to approve their membership 
 * 
 * Written By: Robert Erickson robert.erickson@uvm.edu
 * Last updated on: October 17, 2014
 * 
 */ ?>
<?php
include "top.php";

print '<article id="main">';


//bbegin to create the search
	$check = htmlentities($_GET['q'], ENT_QUOTES, "UTF-8"); 
	$thisDatabase = new myDatabase($dbUserName, $whichPass, $dbName);
	
//lets builkd the query
$query = "SELECT fldJoinDay,pmkEmail FROM tblMembers WHERE pmkEmail = '$email'";
//execute query
$results = $thisDatabase->select($query);

foreach ($results as $row) {
        if ($firstTime) {
            
            $keys = array_keys($row);
            foreach ($keys as $key) {
                if (!is_int($key)) {
                
                }
            }
            
            $firstTime = false;
        }
        
        /* display the data, the array is both associative and index so we are
         *  skipping the index otherwise records are doubled up */
        
        foreach ($row as $field => $value) {
            if (!is_int($field)) {
                
            }
        }
       
    }



if ($results != "") {

// $query = "UPDATE tblMembers SET ?;
$records = $thisDatabase->insert($query);

print "<p> The account has been approved.";
$query = "SELECT fldEmail FROM tblMembers WHERE ?";



$results = $thisDatabase->select($query);

foreach ($results as $row) {
        if ($firstTime) {
            
            $keys = array_keys($row);
            foreach ($keys as $key) {
                if (!is_int($key)) {
                
                }
            }
            
            $firstTime = false;
        }
       
        
        foreach ($row as $field => $value) {
            if (!is_int($field)) {
                
            }
        }
       
    }
    


$message = "You're all goood chekc out the site now !";

$subject = "User Approval";
$to = "$value";
$headers = " ";
mail($to, $subject, $message, $headers);
}
else {
print "<p> Chucks it looks like you're having some trouble</p>";
}

include "footer.php"; ?>

</body>
</html>
	