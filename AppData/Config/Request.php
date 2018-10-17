<?php
/**
 * Created by PhpStorm.
 * User: Mary
 * Date: 16/10/2018
 * Time: 23:44
 */

namespace AppData\Config;


class Request
{
    private $controlador;
    private $metodo;
    private $argumento;

    public function __construct()
    {
        if (isset($_GET['url']))
        {
            $ruta = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
            $ruta = explode("/", $ruta);
            $ruta = array_filter($ruta);

            if ($ruta[0]=="index.php" || $ruta[0]=="index")
            {
                $this->controlador="principal";
            }
            else
            {
                $this->controlador = strtolower(array_shift($ruta));
                $this->metodo = strtolower(array_shift($ruta));
            }
            if(!$this->metodo)
            {
                $this->metodo="index";
            }

            $this->argumento = $ruta;
        }
        else{
            $this->controlador="principal";
            $this->metodo="index";
        }
    }
    public function getControlador()
    {
        return $this->controlador;
    }
    public function getMetodo()
    {
        return $this->metodo;
    }
    public function getArgumento()
    {
        return $this->argumento;
    }
}
?>