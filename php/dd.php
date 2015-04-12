<?php
	@$cat=$_GET['cat'];
	@$cat2=$_GET['cat2'];
	//$cat_id=2;
	/// Preventing injection attack //// 
	if(!is_numeric($cat))
	{
		echo "Data Error";
		exit;
	}
	if(!is_numeric($cat2))
	{
		echo "Data Error";
		exit;
	}
	/// end of checking injection attack ////
	require "config.php";

	//Default to get both locations.
	$cat3 = 3;

	if ($cat > 0 && $cat < 3) 
	{ 
		$cat = 1;
	}
	else if ($cat > 2 && $cat < 5) 
	{
		$cat = 2;
	}
	else if ($cat2 > 0) 
	{
		$cat = 2;
	} 
	else 
	{
		$cat = 0;
		$cat3 = 0;
	}

	$sql="select name,lid from CSALocation where cat='$cat' OR cat='$cat3'";
	$row=$dbo->prepare($sql);
	$row->execute();
	$result=$row->fetchAll(PDO::FETCH_ASSOC);

	$main = array('data'=>$result);
	echo json_encode($main);
?>