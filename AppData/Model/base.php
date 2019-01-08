<?php
/**
 * Created by PhpStorm.
 * User: Mary
 * Date: 29/11/2018
 * Time: 20:07
 */

namespace AppData\Model;


class base
{
    private  $tabla="prestamos";
    private $id_prestamo;
    private $cuenta;
    private $codigo_barras;
    private $fecha_prestamo;

    function __construct()
    {
        $this->conexion=new conexion();
    }

    public function set($atributo, $valor)
    {
        $this->$atributo=$valor;
    }

    public function get($atributo)
    {
        return $this->$atributo;
    }

    function add()
    {

        $sql="insert into {$this->tabla} values('0',{$this->cuenta},{$this->codigo_barras},'{$this->fecha_prestamo}')";
        $this->conexion->QuerySimple($sql);

    }
    function getAll(){
        $sql="SELECT prestamos.id_prestamo, alumnos.nombre_al,
        alumnos.apellido_p, libros.titulo, prestamos.fecha_prestamo, alumnos.cuenta, libros.codigo_barras
        FROM prestamos,alumnos,libros
        WHERE prestamos.cuenta=alumnos.cuenta  and prestamos.codigo_barras=libros.codigo_barras";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }
    function update()
    {
        $sql = "update prestamos set cuenta='{$this->cuenta}', codigo_barras='{$this->codigo_barras}', fecha_prestamo='{$this->fecha_prestamo}'
                where id_prestamo='{$this->id_prestamo}'";
        $this->conexion->QuerySimple($sql);

    }
    function delete($id)
    {
        $sql="delete from {$this->tabla} where id_prestamo='{$id}'";
        $this->conexion->QuerySimple($sql);

    }
    function getOne($id)
    {
        $sql="select * from  {$this->tabla} where id_prestamo='{$id}'";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }
}