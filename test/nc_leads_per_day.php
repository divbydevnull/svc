<?php

include_once "config/config.php";

header("content-type: application/json"); 

$link = mssql_connect($srv, $usr, $pass) or die('mssql_connect failed');
mssql_select_db($db, $link) or die('select db failed');

$query = "
select cast(floor(cast(quotedate as real)) as datetime) as [date], count(jobid) as jobs
from jobs 
where quotedate > '2008-1-1' 
group by cast(floor(cast(quotedate as real)) as datetime)
order by cast(floor(cast(quotedate as real)) as datetime)
";

$res = mssql_query($query);
$result = Array();

while($row = mssql_fetch_assoc($res)) {
	$result[] = $row;
}

echo $_GET['callback']. '('. json_encode($result) . ')';

// Clean up
mssql_free_result($res);
mssql_close($link);

?>

