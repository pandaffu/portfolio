<?php
   $dbConn = new mysqli('mysql.ct8.pl', 'm24598_lcg', 'Taktoja123', 'm24598_lcg');

   if ($dbConn->connect_error) {
      echo "<p>Connection failed: ".$dbConn->connect_error."</p>\n";
      exit;
   }
?>
