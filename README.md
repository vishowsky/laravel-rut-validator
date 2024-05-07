# Laravel RUT Validator

Esta es una librería simple para validar y formatear RUTs (Rol Único Tributario) en Laravel. Permite verificar la validez de un RUT y formatearlo al formato estándar.

## Instalación

Puedes instalar esta librería utilizando Composer. Ejecuta el siguiente comando en la terminal dentro de tu proyecto Laravel:

```bash
composer require vishowsky/rutvalidator
```

## Uso

Una vez instalada la librería, puedes utilizarla en cualquier parte de tu proyecto Laravel.

### formatearRut($rut)

Este método formatea un RUT al formato estándar chileno. Elimina caracteres no válidos, convierte a mayúsculas, agrega guiones y puntos según corresponda.

#### Ejemplo de uso:

```php
use App\Libraries\RUTValidator;

$rut = '123456789';
$rutFormateado = RUTValidator::formatearRut($rut);
```

### validarRut($rut)

Este método valida la validez de un RUT chileno. Verifica si el RUT tiene un formato válido y si el dígito verificador es correcto.

#### Ejemplo de uso:


```php
use App\Libraries\RUTValidator;

$rut = "12.345.678-9";

if (RUTValidator::validarRut($rut)) {
    echo "El RUT es válido";
} else {
    echo "El RUT es inválido";
}
```

### obtenerDigitoVerificador($rut)

Este método devuelve solo el dígito verificador de un RUT.

#### Ejemplo de uso:

```php
use App\Libraries\RUTValidator;

$rut = '123456789';
$dv = RUTValidator::obtenerDigitoVerificador($rut);
```

### limpiarRut($rut)
Este método elimina caracteres no válidos de un RUT y lo devuelve en mayúsculas.

#### Ejemplo de uso:

use App\Libraries\RUTValidator;

```php
$rut = '12.345.678-9';
$rutLimpio = RUTValidator::limpiarRut($rut);
```

## Licencia
Esta librería está bajo la Licencia MIT. Puedes ver los detalles en el archivo LICENSE.