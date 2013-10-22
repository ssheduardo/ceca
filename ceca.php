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
	 * @var string $_num_operacion Requerido 50 Identifica para el comercio la operación, nº de pedido, factura,  albaran, etc.… Puede ser alfanumérico pero están prohibidos los caracteres extraños típicos como ¿,?,%,&,*,etc.
	 */
	protected $_num_operacion;

	/**	 
	 * @var float $_importe Requerido 12 Importe de la operación sin formatear. Siempre será un número entero donde los dos últimos dígitos serán los céntimos de Euro.
	 */
	protected $_importe;

	/**
	 * @var string $_tipoMoneda Requerido 3 Es el código ISO-4217 correspondiente a la moneda en la que se  efectúa el pago. Contendrá el valor 978 para Euros.
	 */
	protected $_tipoMoneda;

	/**
	 * @var integer $_tipoMoneda Requerido 1 Actualmente siempre será 2
	 */
	protected $_exponente;

	/**
	 * Esta URL no deberá utilizarse  para actualizar la operación como pagada en el servidor del  comercio. Ver más información al final de la tabla.
	 * @var string $_url_ok Requerido 500 URL completa. Es la URL determinada por el comercio a  la que Cecabank devolverá el control en el caso de que la  operación finalice correctamente.
	 */
	protected $_url_ok;

	/**
	 * 
	 * @var string $_url_nok Requerido 500 URL completa. Es la URL determinada por el comercio a  la que Cecabank devolverá el control en el caso de que la  operación no pueda realizarse por algún motivo.
	 */
	protected $_url_nok;

	/**
	 * @var string $_firma Requerido 256 Es una cadena de caracteres calculada por el comercio.
	 */
	protected $_firma;
	
	/**
	 * @var string $_cifrado Requerido 4 Valor fijo SHA1.
	 */
	protected $_cifrado;

	/**
	 * @var integer $_idioma Opcional 1 Código de idioma.
	 * 
	 * 1.- Español 2.- Catalán 3.- Euskera 4.- Gallego 5.- Valenciano
	 * 6.- Inglés 7.- Francés 8.- Alemán 9.- Portugués 10.- Italiano 
	 * 11.- Sueco 12.- Danés 13.- Ruso 14.- Holandés 15.- Noruego
	 */
	protected $_idioma;

	/**
	 * @var string $_pago_soportado Requerido 3 Valor fijo SSL.
	 */
	protected $_pago_soportado;

	/**
	 * @var string $_descripcion Opcional 1000 Campo reservado para mostrar información extra en la página de pago.
	 */
	protected $_descripcion;
	/**
	 * 
	 * @var string $_pago_elegido Opcional Dependiendo de quien solicite los datos de la tarjeta. Si los solicita el comercio será SSL. Si los solicita el TPV será vacío o no viajará.
	 */
	protected $_pago_elegido;
	
	/**
	 * @var integer $_pan Opcional 19 Nº de tarjeta del cliente. Este campo tendrá contenido sólo en el caso de que la caja haya autorizado al comercio a solicitar este  tipo de datos. En caso contrario dejarlo sin contenido.
	 */
	protected $_pan;

	/**
	 * @var string $_caducidad Opcional 6 Fecha de Caducidad. Formato AAAAMM. Este campo tendrá  contenido sólo en el caso de que la caja haya autorizado al comercio a solicitar este tipo de datos. En caso contrario dejarlo sin contenido.
	 */
	protected $_caducidad;

	/**
	 * @var integer $_cvv2 Opcional CVC2 de la tarjeta. Este campo tendrá contenido sólo en el caso  de que la caja haya autorizado al comercio a solicitar este tipo de datos. En caso contrario dejarlo sin contenido.
	 */
	protected $_cvv2;

	/**
	 * @var string Referencia Opcional 30 Si el comercio está realizando el pago de una compra el campo  viajará sin contenido. Si el comercio está realizando la anulación de una operación, se informará con el valor correspondiente.
	 */
	protected $_referencia;

	public function __construct()
	{
		$this->_exponente = 2;
		$this->_cifrado = 'SHA1';
		$this->_idioma = 1; //Por defecto español
		$this->_pago_soportado = 'SSL';
	}


}