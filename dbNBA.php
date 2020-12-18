<?php
//creamos la clase que permitirá la conexión a la BD y control de errores
class dbNBA extends mysqli {
  //atributos necesarios para la conexion
  private $host='localhost';
  private $usuario='root';
  private $pass='';
  private $db='nba';

  public function __construct (){
    parent:: __construct($this->host, $this->usuario, $this->pass, $this->db);

    //indicamos que la codificación será utf8
    $this->set_charset('utf8');

    //Controlamos los errores de conexión
    $this->connect_errno ? die ('Error en la conexion'.mysqli_connect_errno()) :
        $m='Conexión establecida!';
        //echo $m;
    }
}

 ?>
