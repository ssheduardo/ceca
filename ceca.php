<?php
namespace Ubublog\Ceca;
/**
* Ceca
* @package ceca
* @author Eduardo Díaz
* @since 1.0.0
*/
class Ceca{
	/**	 
	 * @var integer $_merchantID Requerido 9 Identifica al comercio. Facilitado por la caja en el proceso de alta
	 */
	protected $_merchantID;
	
	/**
	 * @var integer $_acquirerBIN Requerido 10 Identifica la caja. Facilitado por la caja en el proceso de alta.
	 */
	protected $_acquirerBIN;

	/**
	 * @var integer $_terminalID Requerido 8 Identifica al terminal. Facilitado por la caja en el proceso de alta.
	 */
	protected $_terminalID;

	/**
	 * 
	 * @var string Num_operacion Requerido 50 Identifica para el comercio la operación, nº de pedido, factura,  albaran, etc.… Puede ser alfanumérico pero están prohibidos los caracteres extraños típicos como ¿,?,%,&,*,etc.
	 */
	protected $_num_operacion;

	/**	 
	 * @var float Importe Requerido 12 Importe de la operación sin formatear. Siempre será un número entero donde los dos últimos dígitos serán los céntimos de Euro.
	 */
	protected $_importe;

	/**
	 * @var string TipoMoneda Requerido 3 Es el código ISO-4217 correspondiente a la moneda en la que se  efectúa el pago. Contendrá el valor 978 para Euros.
	 */
	protected $_tipoMoneda;

	/**
	 * @var integer Exponente Requerido 1 Actualmente siempre será 2
	 */
	protected $_exponente;

	/**
	 * Esta URL no deberá utilizarse  para actualizar la operación como pagada en el servidor del  comercio. Ver más información al final de la tabla.
	 * @var string URL_OK Requerido 500 URL completa. Es la URL determinada por el comercio a  la que Cecabank devolverá el control en el caso de que la  operación finalice correctamente.
	 */
	protected $_url_ok;

	/**
	 * 
	 * @var string URL_NOK Requerido 500 URL completa. Es la URL determinada por el comercio a  la que Cecabank devolverá el control en el caso de que la  operación no pueda realizarse por algún motivo.
	 */
	protected $_url_nok;


	public function __construct()
	{
		$this->_exponente = 2;
	}

}