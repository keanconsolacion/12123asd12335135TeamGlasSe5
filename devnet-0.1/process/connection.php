<?php


session_start();
//prepared statement variables
//change these settings to match with your database.
/*since ginagamit ko is hosted phpmyadmin sa office, I have a current account for the db
  so i used "gtech.dp" as my user,

  for regular phpmyadmin using XAMPP or WAMPP, the default user and pass is

        user = "root"
        pass = ""

        "" = means no password,

        replace $dbuser and $dbpass to your phpmyadmin settings

*/
$server = "localhost";
$dbuser = "root";
$dbpass = "";

  //$dbname, is the name of the database being used, since in the office hosted servers I cannot change
  //my db name since it is already set for me, you can create your own database and change the settings here
  //to match your database.
$dbname = "otso";

  //these variable will be used as an import in other php files when connecting to the database.
  //mysqli_connect is the newer version of mysql_connect, so avoid using any mysql functions and use mysqli.
  //all of these information is available at https://www.php.net/docs.php and https://www.w3schools.com/php/
  // you can ask me anytime at FB or at Discord @devnet-pol#5278

$conn = mysqli_connect($server, $dbuser, $dbpass, $dbname);

//if connection fails disconnect
if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}
 ?>
