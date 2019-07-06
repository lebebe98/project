<?php
require("Database.php");
$dbObj = new Database();
//case 1 Inserting data using valid SQL insert command
// $result= $dbObj->execute("INSERT INTO tbluser(name, age, address, nationality) VALUES ('Galido', 20, 'Cebu City', 'Filipino' )");
// echo "Case 1 Result: ".$result;
//case 2 Updating data using valid SQL update command
//$result = $dbObj->execute("UPDATE tbluser SET name='Galido Bruce' WHERE id=1");
//echo "Case 2 result: ".$result;
//case 3 Extracting data using valis SQL select command.
// $result = $dbObj->execute("SELECT * FROM tbluser");
// echo "Case 3 result: ".$result
//case 4
// $result= $dbObj->execute("DELETE FROM tbluser WHERE name= 'Galido Bruce' ");
// echo "Case 4 result: ".$result
//case 5
// $result= $dbObj->execute("INSER INTO tbluser");
// echo "Case 5 result: ".$result
//case 6
// $result= $dbObj->execute("UPDAT tbluser SET name='1' WHERE id=das");
// echo "Case 6 result: ".$result
//case 7
// $result= $dbObj->execute("SELEC * FROM tbluser");
// echo "Case 7 result: ".$result
//case 8
$result= $dbObj->execute("DELET FROM tbluser WHERE name= '123123'");
echo "Case 8 result: ".$result


?>