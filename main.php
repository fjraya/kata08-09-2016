<?php
/**
 * Created by PhpStorm.
 * User: javierraya
 * Date: 9/8/16
 * Time: 8:57
 */

require_once 'vendor/autoload.php';
$areaService = new \Kata\AreaService();
$costeTriangulo = $areaService->calcularPrecio('rural', 'triangulo', 3, 4);
echo 'El precio del terreno triangular es: '.$costeTriangulo. "\n";