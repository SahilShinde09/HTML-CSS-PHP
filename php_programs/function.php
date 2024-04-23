<?php
session_start();
function db_query(string $query, array $data =array())
{
	$string= "mysql:hostname=localhost;dbname=login";
	$con=new PDO($string,'root','');
	
	$stm=$con->prepare($query);
	$check=$stm->execute($data);
	
	if($check)
	{
		$res=$stm->fetchAll(PDO::FETCH_ASSOC);
		if(is_array($res) && !empty($res))
		{
			return $res;
		}
	}
}

function redirect($path):void
{
	header("Location:$path");
	die;
}
function get_image($path=''):string{
	if(file_exists($path))
	{
		return $path;
	}
	return 'noimage.png';
}
