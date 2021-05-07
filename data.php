<?php

$accounts = mysql_connect("localhost", "root", "password")
or die (mysql_error());

mysql_select_db("accounts", $accounts);

$sql = "
INSERT INTO users2 (Username, Password, First, Last) VALUES ('Chris', 'pass123', 'Chris', 'Johnson')
";

mysql_query($sql, $accounts0);



?>