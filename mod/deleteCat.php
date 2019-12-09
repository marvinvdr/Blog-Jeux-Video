<?php
$sql="DELETE FROM categorie WHERE catID=:id";
$result=$dbh->prepare($sql);
$result->bindValue('id',$_GET['id'], PDO::PARAM_INT);
$result->execute();

$sqlinter="SELECT articleID FROM article WHERE catID=".$_GET['id'];
$stmt = $dbh->query($sqlinter);
$tab=array();
 while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) 
{
	$tab[]=$row["articleID"];
}
foreach($tab as $ligne)
{
	$sqlCom="DELETE FROM commentaire  WHERE articleID=$ligne";
	$resultCom=$dbh->prepare($sqlCom);
	$resultCom->bindValue('id',$_GET['id'], PDO::PARAM_INT);
	$resultCom->execute();
}

$sqlimg="SELECT image FROM article WHERE catID=".$_GET['id'];
$stmt2 = $dbh->query($sqlimg);
$tab2=array();
while ($row = $stmt2->fetch(PDO::FETCH_ASSOC)) 
{
	$tab2[]=$row["image"];
}
foreach($tab2 as $ligne)
{
	unlink("public/images/$ligne");
}
 
$sqlArt="DELETE FROM article  WHERE catID=:id";
$resultArt=$dbh->prepare($sqlArt);
$resultArt->bindValue('id',$_GET['id'], PDO::PARAM_INT);
$resultArt->execute();
header('Location: ?param=listCat&del=true');
