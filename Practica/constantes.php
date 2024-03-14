<?php
 /*Constantes
 Para empezar debemos saber que una constante no se puede alterar o modificar
 Son valores fijos, Sigue las mismas REGLAS DE LAS VARIABLES pero no empieza con el $

Por convecion las constantes se declaran con MAYUSCULAS
 */

 const NOMBRE ="Jaime";
 const NOMBRE = "Alejandro";
 echo NOMBRE;
 /* Constantes predefinidas
 
 __LINE__ = El numero de lineas actual en el fichero

 __FILE__ = ruta completa y nombre del fichero con enlaces simbolicos
 resuletos, si se usa de  un include, devolvera el nombre del fichero incluido

__DIR__ = director del ficher, si se utiliza dentro de un iclude, devolvera el directorio
del fichero incluido

__FUNCTION__ = nombre de la funcion

__CLASS__  = nombre de la clase incluye namespace declarado

__TRAIT__  = el nombre de trai. el nombre de trait incluye el espacio de nombre en 
el que fue declarado

__METHOD__  = nombre del metodo de clase.

__NAMESPACE__ = nombre del espacio de nombres actual

ClassName::class =eL NOMBRE DE CLASES COLETAMENTE CUALIFICADO

 */

define('ANIMALES',array(

    'Perro',
    'Gato',
    'Pajaro'
));

echo ANIMALES[0];
echo ANIMALES[1];
echo ANIMALES[2];