<?php error_reporting(E_ERROR | E_PARSE);
//local
function abreConn(){
	$bd = mysqli_connect("localhost","root","", "bcositenovo") or die("Não conseguiu conectar ao servidor! " . mysqli_error());
	return $bd;
}
function redirect($url){
?>
	<script language="javascript">
		document.location.href = "<?=$url?>";
	</script>
<?php 
	die();
}
$versao = "1";
?>