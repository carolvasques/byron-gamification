<?php

<<<<<<< HEAD
=======
	

>>>>>>> adfa01488e250d7ecfb37c149d5a5bd98cee7884
function convert_date_db_to_gui($date){
    $new = explode("-",$date);
    $new_date = $new[2]."/".$new[1]."/".$new[0];

    return $new_date;
}

function convert_genre_db_to_gui($genre){

    if($genre == "M"){
        return "Masculino";
    }
    
    if($genre == "F"){
        return "Feminino";
    }
}
<<<<<<< HEAD
function recupera_xp(){
    require_once ('mysql_connect.php');
    require_once ("check_login.php");
    
    $test = 'xp';
    $queryText = "SELECT * FROM `log` WHERE `type` = '".$test."'";
    $queryResult = mysqli_query($conn, $queryText);
    
   while($xp = mysqli_fetch_array($queryResult)){
        echo "<p>'".$xp['user']."' '".$xp['message']."'</p>";
   }    
}
function recupera_add(){
    require_once ('mysql_connect.php');
    require_once ("check_login.php");
    
    $test = 'add';
    $queryText = "SELECT * FROM `log` WHERE `type` = '".$test."'";
    $conn = mysqli_connect("localhost", "root", "", "gamification_db") or die();
    $queryResult = mysqli_query($conn, $queryText);
    
   while($xp = mysqli_fetch_array($queryResult)){
        echo "<p>'".$xp['user']."' '".$xp['message']."'</p>";
   }    
}
function recupera_remove(){
    require_once ('mysql_connect.php');
    require_once ("check_login.php");
    
    $test = 'remove';
    $queryText = "SELECT * FROM `log` WHERE `type` = '".$test."'";
    $conn = mysqli_connect("localhost", "root", "", "gamification_db") or die();
    $queryResult = mysqli_query($conn, $queryText);
    
   while($xp = mysqli_fetch_array($queryResult)){
        echo "<p>'".$xp['user']."' '".$xp['message']."'</p>";
   }    
}
function recupera_edit(){
    require_once ('mysql_connect.php');
    require_once ("check_login.php");
    
    $test = 'edit';
    $queryText = "SELECT * FROM `log` WHERE `type` = '".$test."'";
    $conn = mysqli_connect("localhost", "root", "", "gamification_db") or die();
    $queryResult = mysqli_query($conn, $queryText);
    
   while($xp = mysqli_fetch_array($queryResult)){
        echo "<p>'".$xp['user']."' '".$xp['message']."'</p>";
   }    
}

=======
>>>>>>> adfa01488e250d7ecfb37c149d5a5bd98cee7884
function exp_total_guild($id){
	require_once ("check_login.php");
	require_once ("mysql_connect.php");

	$exp_total = 0;
    $sessionID      = $id;
    $query_text = "SELECT `exp` FROM `usuario` WHERE `id_guild` = '".$sessionID."'";
	$query_result   = mysqli_query($conn, $query_text);
    while($row = mysqli_fetch_array($query_result)){
		$exp_total+=$row['exp'];
	}

	$query_TEXT     = "SELECT `exp` FROM `guilda` WHERE `id`='".$sessionID."'";
	$query_result   = mysqli_query($conn, $query_TEXT);
	$linha          = mysqli_fetch_array($query_result);

	$exp_total     	+= $linha['exp'];

	return $exp_total;

}

?>