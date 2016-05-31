<?php

require_once('usuarios_model.php');
require_once('aulas_model.php');
# Traer los datos de un usuario. Retrieve, get, select
/*$usuario1 = new Usuario();
$usuario1->get('user@email.com');
print $usuario1->nombre . ' ' . $usuario1->apellido . ' existe<br>';

# Crear un nuevo usuario. Alta, insert.
$new_user_data = array(
	'nombre'=>'Alberto',
	'apellido'=>'Jacinto',
	'email'=>'albert2000@mail.com',
	'clave'=>'jacaranda'
);
$usuario2 = new Usuario();
$usuario2->set($new_user_data);
$usuario2->get($new_user_data['email']);
print $usuario2->nombre . ' ' . $usuario2->apellido . ' ha sido creado<br>';

# Editar los datos de un usuario existente. Update, modificar.
$edit_user_data = array(
	'nombre'=>'Gabriel',
	'apellido'=>'Lopez',
	'email'=>'dperez@gmail.com',
	'clave'=>'69274'
);
$usuario3 = new Usuario();
$usuario3->edit($edit_user_data);
$usuario3->get($edit_user_data['email']);
print $usuario3->nombre . ' ' . $usuario3->apellido . ' ha sido editado<br>';

# Eliminar un usuario
$usuario4 = new Usuario();
$usuario4->get('lei@mail.com');
$usuario4->delete('lei@mail.com');
print $usuario4->nombre.' ' . $usuario4->apellido.' ha sido eliminado';
*/
echo "<br>AULAS";
$aula1 = new Aulas();
//Prova de get
$aula1->get(1);
print $aula1->id . ' ' . $aula1->num . "-" .$aula1->superficie .'m2 ha sido recuperado<br>';

$set_user_data = array(
	'num'=> 3,
	'superficie'=> 14,
	'edificio'=>'OMEGA'
);

//insert aulas
$aula2 = new Aulas();
$aula2->set($set_user_data);
//$aula2->get(3);
//print $aula2->id . ' ' . $aula2->num . "-" .$aula2->superficie .'m2 ha sido recuperado<br>';

//update aulas
$edit_user_data = array(
	'num'=> 3,
	'superficie'=> 24,
	'edificio'=>'ALFA'
);
$aula3 = new Aulas();
$aula3->edit($edit_user_data);
$aula3->get($edit_user_data['num']);
print $aula3->id . ' ' . $aula3->num . "-" .$aula3->superficie .'m2 ha sido recuperado<br>';

$aula4 = new Aulas();
$aula4->delete(3);

$aula5 = new Aulas();
$aula5->listAll();
print_r($aula5->rows);
echo $aula5->rows[0]['id']."<br>";
echo $aula5->rows[1]['superficie'];
?>