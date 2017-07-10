<?php

/**
 * Problema 01 - ChangeString
 *
 * @author Eder Marquina
 */
class ChangeString {

    //put your code here
    private function abecedario() {
        return array(
            'a', 'b', 'c', 'd', 'e', 'f',
            'g', 'h', 'i', 'j', 'k', 'l',
            'm', 'n', 'ñ', 'o', 'p', 'q',
            'r', 's', 't', 'u', 'v', 'w',
            'x', 'y', 'z'
        );
    }

    private function cambiaCadena($string) {
        //obtengo abecedario
        $abecedario = $this->abecedario();
        $tamString = strlen($string); //tamaño del string
        $tamAbecedario = count($abecedario); //tamaño del abecedario
        $nuevoString = "";

        for ($i = 0; $i < $tamString; $i++) {
            //obtiene caracter de string
            $caracter = substr($string, $i, 1);

            for ($j = 0; $j < $tamAbecedario; $j++) {
                $pos = $j == ($tamAbecedario - 1 ) ? 0 : ($j + 1);

                //compruebo que el caracter es mayúscula o no
                if (ctype_upper($caracter)) {
                    //si caracter es mayúsculas entonces las letras del abecedatio también
                    $letraAbecedario = strtoupper($abecedario[$j]);
                    $siguienteLetraAbecedario = strtoupper($abecedario[$pos]);
                } else {
                    //si caracter no es mayúsculas entonces las letras del abecedatio tampoco
                    $letraAbecedario = $abecedario[$j];
                    $siguienteLetraAbecedario = $abecedario[$pos];
                }

                //comparamos caracter con letra de abecedario, si son iguales entonces sale del bucle
                if ($caracter == $letraAbecedario) {
                    $nuevaLetra = $siguienteLetraAbecedario;
                    break;
                } else {
                    $nuevaLetra = $caracter;
                }
            }

            //formamos el nuevo string
            $nuevoString .= $nuevaLetra;
        }

        return $nuevoString;
    }

    public function build($string) {
        $resultado = $this->cambiaCadena($string);
        return "Entrada: " . $string . " ... Salida: " . $resultado . "<br/>";
    }

}
