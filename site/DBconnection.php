<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Id</th><th>Country</th><th>Proposer</th><th>Rating</th><th>View</th></tr>";

class TableRows extends RecursiveIteratorIterator {
  function __construct($it) {
    parent::__construct($it, self::LEAVES_ONLY);
  }

  function current() {
    return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
  }

  function beginChildren() {
    echo "<tr>";
  }

  function endChildren() {
    echo "</tr>" . "\n";
  }
}
try {
$conn = new PDO("sqlsrv:server=DESKTOP-770BSID\MSSQLSERVER,1433;Database=MusicWeb;ConnectionPooling=0");
$stmt = $conn->prepare("select * from Song");
	$stmt->execute();
	
	// set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
    echo $v;
  }
} catch (PDOException $e) {

    echo $e->getMessage();
}
?>
</body>
</html>
