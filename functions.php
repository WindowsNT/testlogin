<?php

$dbs = new SQLite3("database.db");
$lastRowID = 0;

function Query($q,$arr = array(),$stmtx = null)
{
    global $dbs;
    global $lastRowID;
	$stmt = $stmtx;
    if (!$stmt)
        $stmt = $dbs->prepare($q);
    if (!$stmt)
        return null;
    $i = 1;
    foreach($arr as $a)
    {
        $stmt->bindValue($i,$a);
        $i++;
    }
    $a = $stmt->execute();
    $lastRowID = $dbs->lastInsertRowID();
    return $a;
}



