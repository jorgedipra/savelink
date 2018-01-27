<?php 
if(isset($_POST["envio"])){
	$archivo = "../Definicion&especificaciondeRequerimiento.html";//creamos un archivo llamado 'alumnos'
	$file=fopen($archivo,"w");
	fwrite($file,$_REQUEST['envio']); 
	fclose($file);//cerramos el archivo de alumnos
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Editor</title>
	<link rel="stylesheet" href="ckeditor/contents.css">
	<link rel="icon" href="#">
</head>
<body>
<style type="text/css" media="screen">
	#tem{
		opacity: 0;
		width: 0;
		height: 0;
		position: absolute;
		z-index: -1;
	}
</style>
	<div class="adjoined-bottom">
		<div class="grid-container">
			<div class="grid-width-100">
				<form  id="form" action="#" method="post" accept-charset="utf-8">
					<textarea name="envio" id="editor"></textarea>
				</form>
			</div>
		</div>
	</div>
<span id="tem"></span>
<script src="js/jquery-1.8.2.min.js"></script>
<script src="ckeditor/ckeditor.js"></script>	
<script src="ckeditor/samples/js/sample.js"></script>	
<script>
	jQuery(document).ready(function($) {
		$("#tem").load('../Definicion&especificaciondeRequerimiento.html',function(){
			$("#editor").html($("#tem").html());
			initSample();
			setTimeout(function(){
				$("span.cke_button_icon.cke_button__maximize_icon").click();
			},500)
		});			
	});
</script>
</body>
</html>