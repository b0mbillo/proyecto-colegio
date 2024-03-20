<?php 

$formatos = array('.gif','.jpg','.png','.doc','.pptx','.xlsx');
$carpeta = 'archivos';
$contador= 0;

if (isset($_POST['boton'])) {
	$nombre=$_FILES['archivo']['name'];
    $guardado=$_FILES['archivo']['tmp_name'];
	$exten = substr($nombre, strpos($nombre, '.'));

	

if(!file_exists('archivos')){
	mkdir('archivos',0777,true);
	if(file_exists('archivos')){
		if(move_uploaded_file($guardado, 'archivos/'.$nombre)){
			echo "El $nombre archivo fuguardado con exito";
			
		}else{
			echo "El $nombre archivo no se pudo guardar";
		}
	}
}else{
	if(move_uploaded_file($guardado, 'archivos/'.$nombre)){
		echo "El $nombre archivo fue guardado con exito";
	}else{
		echo "El $nombre archivo no se pudo guardar";
	}
}
}

 ?>