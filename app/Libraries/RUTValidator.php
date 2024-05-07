<?php

namespace App\Libraries;

class RUTValidator
{
    public static function formatearRut($rut)
    {
        $rut = preg_replace('/[^0-9kK]/', '', $rut); // Eliminar caracteres no válidos
        $rut = strtoupper($rut); // Convertir a mayúsculas
        $rut = strrev($rut); // Revertir el RUT
        $rut = substr_replace($rut, "-", 1, 0); // Insertar guión después del primer dígito
        $rut = substr_replace($rut, ".", 5, 0); // Insertar punto después del quinto dígito
        $rut = substr_replace($rut, ".", 9, 0); // Insertar punto después del noveno dígito
        return strrev($rut); // Revertir nuevamente
    }


    
    public static function validarRut($rut)
    {
        $rut = preg_replace('/[^0-9kK]/', '', $rut); // Eliminar caracteres no válidos
        if (strlen($rut) < 2) {
            return false;
        }
        $dv = substr($rut, -1);
        $rut = substr($rut, 0, -1);
        $suma = 0;
        $multiplo = 2;
        for ($i = strlen($rut) - 1; $i >= 0; $i--) {
            $suma += $rut[$i] * $multiplo;
            $multiplo = ($multiplo == 7) ? 2 : $multiplo + 1;
        }
        $dvCalculado = 11 - ($suma % 11);
        if ($dvCalculado == 11) {
            $dvCalculado = 0;
        } elseif ($dvCalculado == 10) {
            $dvCalculado = 'K';
        }
        return $dvCalculado == $dv;
    }

    public static function obtenerDigitoVerificador($rut)
    {
        $rut = preg_replace('/[^0-9kK]/', '', $rut); // Eliminar caracteres no válidos
        if (strlen($rut) < 2) {
            return false;
        }
        return strtoupper(substr($rut, -1)); // Devolver solo el dígito verificador
    }

    public static function limpiarRut($rut)
    {
        $rut = preg_replace('/[^0-9kK]/', '', $rut); // Eliminar caracteres no válidos
        return strtoupper($rut); // Devolver el RUT limpio en mayúsculas
    }


}
