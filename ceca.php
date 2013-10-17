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

	protected $_urlok;
	protected $_urlnok;
	public function __construct()
	{

	}

}