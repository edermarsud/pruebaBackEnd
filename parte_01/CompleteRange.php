<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CompleteRange
 *
 * @author Eder Marquina
 */
class CompleteRange {

    private $primero;
    private $ultimo;
    private $rango;
    private $nuevoRango;
    private $tamano;

    private function compleraRango($param) {
        $param = trim($param);
        $this->rango = explode(",", $param);
        $this->tamano = count($this->rango);
        $this->nuevoRango = array();

        for ($i = 0; $i < $this->tamano; $i++) {
            $actual = $this->rango[$i];
            //si $i es la última posición de array, entonces $siguiente=$actual;
            $siguiente = ($i == ($this->tamano - 1)) ? $actual : $this->rango[$i + 1];
            $diferencia = $siguiente - $actual;

            //si la diferencia entre $siguiente y $actual es mayor a 1 significa que
            //entre éstos dos números faltan otros números
            if ($diferencia > 1) {
                $this->primero = $actual;
                $this->ultimo = $siguiente;

                //por eso luego completamos los números faltantes
                for ($num = $this->primero; $num < $this->ultimo; $num++) {
                    $this->nuevoRango[] = $num;
                }
            } else {
                $this->nuevoRango[] = $actual;
            }
        }

        return implode(",", $this->nuevoRango);
    }

    public function build($param) {
        $resultado = $this->compleraRango($param);
        return "Entrada: " . $param . " ... Salida: " . $resultado . " <br/>";
    }

}
