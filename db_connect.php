<?php $dblink = mysql_connect("std.weblab.teipir.gr", "web_wed21",
"w170e7cda0") or die ("Could not connect");

mysql_select_db("web_wed21")
or die ("could not select");

mysql_query("SET CHARACTER SET UTF8");
?>