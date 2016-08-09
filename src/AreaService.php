<?php
/**
 * Created by PhpStorm.
 * User: javierraya
 * Date: 9/8/16
 * Time: 8:43
 */

namespace Kata;

class AreaService
{
	public function calcularPrecio($tipo, $forma, $base, $altura)
	{
		$coste = 0;
		switch($forma) {
			case 'triangulo':
				$area = ($base * $altura) / 2;
				$coste = $area * 12;
				if ($tipo == 'urbano') $coste = $coste * 0.8;
				else if ($tipo == 'rural') $coste = $coste * 0.6;
				break;
			case 'rectangulo':
				$area = $base * $altura;
				$coste = $area * 14;
				if ($tipo == 'urbano') $coste = $coste * 0.7;
				else if ($tipo == 'rural') $coste = $coste * 0.5;
				break;
		}
		return $coste;
	}
}