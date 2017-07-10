<?php

/**
 * Problema 03 - ClearPar
 *
 * @author Eder Marquina
 */
class ClearPar {

    private $tamString;
    private $abierto;
    private $cerrado;
    private $nuevaCadena;

    private function limpiaParentesis($param) {
        $this->tamString = strlen($param);
        $this->abierto = '(';
        $this->cerrado = ')';
        $this->nuevaCadena = '';

        for ($i = 0; $i < $this->tamString; $i++) {
            //obtiene caracter de string
            $caracter = str_split($param);
            $next = $i == ($this->tamString - 1) ? $i : ($i + 1);
            $actual = $caracter[$i];
            $siguiente = $caracter[$next];

            if ($actual == $this->abierto && $siguiente == $this->cerrado) {
                $this->nuevaCadena .= $actual . $siguiente;
            }
        }

        return $this->nuevaCadena;
    }

    public function build($param) {
        $resultado = $this->limpiaParentesis($param);
        return "Entrada: " . $param . " ... Salida: " . $resultado . "<br/>";
    }

}
