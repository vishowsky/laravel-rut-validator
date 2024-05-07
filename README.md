# Laravel RUT Validator

Esta es una librería simple para validar y formatear RUTs (Rol Único Tributario) en Laravel. Permite verificar la validez de un RUT y formatearlo al formato estándar.

## Instalación

Puedes instalar esta librería utilizando Composer. Ejecuta el siguiente comando en la terminal dentro de tu proyecto Laravel:

composer require vishowsky/RUTValidator

## Uso

Una vez instalada la librería, puedes utilizarla en cualquier parte de tu proyecto Laravel. Aquí tienes un ejemplo de cómo validar un RUT:

```php
use App\Libraries\RUTValidator;

$rut_ingresado = "12.345.678-9";
if (RUTValidator::validarRut($rut_ingresado)) {
    echo "El RUT es válido";
} else {
    echo "El RUT es inválido";
}

```

## Contribuciones

Las contribuciones son bienvenidas. Si encuentras algún error o tienes alguna mejora, por favor, abre un problema o envía una solicitud de extracción en GitHub.

## Licencia

Esta librería está bajo la Licencia MIT. Puedes ver los detalles en el archivo LICENSE.

