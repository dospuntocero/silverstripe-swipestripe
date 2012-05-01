<?php

i18n::include_locale_file('swipestripe/lang', 'en_US');

global $lang;

if(array_key_exists('es_ES', $lang) && is_array($lang['es_ES'])) {
	$lang['es_ES'] = array_merge($lang['en_US'], $lang['es_ES']);
} else {
	$lang['es_ES'] = $lang['en_US'];
}

// ===============
// = Langbuilder =
// ===============

// Output for class or file: ShopAdmin
$lang['es_ES']['ShopAdmin']['NOTPARTOFTHESITETREE'] = 
	'No es parte del árbol del sitio';
$lang['es_ES']['ShopAdmin']['VIEW'] = 
	'Ver página';
$lang['es_ES']['ShopAdmin']['VIEWLIVE'] = 
	'Sitio publicado';
$lang['es_ES']['ShopAdmin']['VIEWDRAFT'] = 
	'Sitio borrador';
$lang['es_ES']['ShopAdmin']['BACKTOLIST'] = 
	'Volver al listado';

// Output for class or file: ModelAdmin
$lang['es_ES']['ModelAdmin']['PUBLISHED'] = 
	'Publicado';
$lang['es_ES']['ModelAdmin']['UNPUBLISHED'] = 
	'Sin publicar';
$lang['es_ES']['ModelAdmin']['ROLLEDBACK'] = 
	'Versión previa';
$lang['es_ES']['ModelAdmin']['DELETED'] = 
	'Borrado';
$lang['es_ES']['ModelAdmin']['SAVED'] = 
	'Guardado';
$lang['es_ES']['ModelAdmin']['DELETEDFROMLIVE'] = 
	'Borrado';
$lang['es_ES']['ModelAdmin']['SEARCHFOR'] = 
	'Buscar por:';

// Output for class or file: ShopSettings
$lang['es_ES']['ShopSettings']['LICENSEKEY'] = 
	'Llave de licencia';
$lang['es_ES']['ShopSettings']['FROM'] = 
	'de';
$lang['es_ES']['ShopSettings']['TO'] = 
	'para';
$lang['es_ES']['ShopSettings']['RECEIPT_TO'] = 
	'Enviado al comprador';
$lang['es_ES']['ShopSettings']['SUBJECT_LINE'] = 
	'Asunto';
$lang['es_ES']['ShopSettings']['MESSAGE'] = 
	'Mensaje (los detalles de la orden están incluídos en el email)';
$lang['es_ES']['ShopSettings']['SIGNATURE'] = 
	'Firma';
$lang['es_ES']['ShopSettings']['NOTIFICATION_FROM'] = 
	'Correo electrónico del cliente';
$lang['es_ES']['ShopSettings']['SWIPESTRIPELICENSEWARNING'] = 
	'<p class="message warning">
					 Warning: Tienes SwipeStripe instalado sin licencia. 
					<a href="http://swipestripe.com" target="_blank">Compra una aquí</a> antes de que el sitio sea publicado.
				</p>';

// Output for class or file: AccountPage
$lang['es_ES']['AccountPage']['YOUMUSTBELOGGED'] = 
	'Debes tener una sesión activa para ver esta página';
$lang['es_ES']['AccountPage']['YOUCANNOTVIEWORDERS'] = 
	'No puedes ver ordenes que no te pertenecen.';
$lang['es_ES']['AccountPage']['NOORDERTOTHISID'] = 
	'No tienes ninguna orden que corresponda a esa ID.';
$lang['es_ES']['AccountPage']['DATE'] = 
	'Fecha';
$lang['es_ES']['AccountPage']['SHIPTO'] = 
	'Enviado a';
$lang['es_ES']['AccountPage']['TOTAL'] = 
	'Total';
$lang['es_ES']['AccountPage']['STATUS'] = 
	'Estado';
$lang['es_ES']['AccountPage']['VIEWTHISORDER'] = 
	'Ver esta orden';

// Output for class or file: CartPage
$lang['es_ES']['CartPage']['UPDATECART'] = 
	'Actualizar el carro';
$lang['es_ES']['CartPage']['GOTOCHECKOUT'] = 
	'Ir al carro';

// Output for class or file: CheckoutPage
$lang['es_ES']['CheckoutPage']['PROCEEDTOPAY'] = 
	'Ir a pagar';
$lang['es_ES']['CheckoutPage']['FIRSTNAME'] = 
	'Nombre';
$lang['es_ES']['CheckoutPage']['PLEASEENTERYOURFIRSTNAME'] = 
	'Por favor ingresa tu nombre.';
$lang['es_ES']['CheckoutPage']['SURNAME'] = 
	'Apellidos';
$lang['es_ES']['CheckoutPage']['PLEASEENTERYOURSURNAME'] = 
	'Por favor ingresa tus apellidos.';
$lang['es_ES']['CheckoutPage']['ADDRESS1'] = 
	'Dirección 1';
$lang['es_ES']['CheckoutPage']['PLEASEENTERYOURADDRESS'] = 
	'Por favor ingresa tu dirección.';
$lang['es_ES']['CheckoutPage']['CITY'] = 
	'Ciudad';
$lang['es_ES']['CheckoutPage']['PLEASEENTERYOURCITY'] = 
	'Por favor ingresa tu ciudad';
$lang['es_ES']['CheckoutPage']['COUNTRY'] = 
	'País';
$lang['es_ES']['CheckoutPage']['PLEASEENTERYOURCOUNTRY'] = 
	'Por favor ingresa tu País.';
$lang['es_ES']['CheckoutPage']['BILLINGADDRESS'] = 
	'Dirección de facturación';
$lang['es_ES']['CheckoutPage']['COMPANY'] = 
	'Compañía';
$lang['es_ES']['CheckoutPage']['ADDRESS2'] = 
	'Dirección 2';
$lang['es_ES']['CheckoutPage']['POSTALCODE'] = 
	'Código postal';
$lang['es_ES']['CheckoutPage']['STATE'] = 
	'Estado';
$lang['es_ES']['CheckoutPage']['PLEASEENTERAFIRSTNAME'] = 
	'Por favor ingresa tu nombre.';
$lang['es_ES']['CheckoutPage']['PLEASEENTERASURNAME'] = 
	'Por favor ingresa tu apellido.';
$lang['es_ES']['CheckoutPage']['PLEASEENTERANADDRESS'] = 
	'Por favor ingresa tu dirección.';
$lang['es_ES']['CheckoutPage']['PLEASEENTERACITY'] = 
	'Por favor ingresa tu ciudad.';
$lang['es_ES']['CheckoutPage']['PLEASEENTERACOUNTRY'] = 
	'Por favor ingresa tu país.';
$lang['es_ES']['CheckoutPage']['Region'] = 
	'Región';
$lang['es_ES']['CheckoutPage']['sameaddress'] = 
	'¿a la misma dirección?';
$lang['es_ES']['CheckoutPage']['Shipping Address'] = 
	'Dirección de envío';
$lang['es_ES']['CheckoutPage']['Email'] = 
	'Email';
$lang['es_ES']['CheckoutPage']['PERSONALDETAILS'] = 
	'Detalles personales';
$lang['es_ES']['CheckoutPage']['Phone'] = 
	'Teléfono';
$lang['es_ES']['CheckoutPage']['PASSWORD'] = 
	'Contraseña';
$lang['es_ES']['CheckoutPage']['PASSWORDNOTE'] = 
	'<p class="alert alert-info">
							<strong class="alert-heading">Nota:</strong>
							Por favor elige una contraseña, de esta forma podrás acceder a tu cuenta y revisar tu historial de compras en el futuro.<br /><br />
							Si ya eres miembro, por favor <a href="Security/login?BackURL=$link">ingresa aquí</a>.
						</p>';
$lang['es_ES']['CheckoutPage']['NOTESABOUTTHISORDER'] = 
	'Notas acerca de esta orden';
$lang['es_ES']['CheckoutPage']['SELECTPAYMENTMETHOD'] = 
	'Selecciona un método de pago.';
$lang['es_ES']['CheckoutPage']['NOTAVALIDPAYMENTMETHOD'] = 
	'Lo sentimos, este método de pago no es válido.';
$lang['es_ES']['CheckoutPage']['GOBACKTRYAGAIN'] = 
	'Por favor vuelve atrás e intentalo nuevamente.';
$lang['es_ES']['CheckoutPage']['MEMBERALREADYEXISTS'] = 
	'Lo sentimos, ya existe un miembro con esa dirección de correo electrónico. Si es tuya, por favor ingresa al sitio antes de realizar tu pedido.';

// Output for class or file: CheckoutPage. Please enter your email address
$lang['es_ES']['CheckoutPage. Please enter your email address'][''] = 
	'Por favor ingresa tu correo electrónico.';

// Output for class or file: Customer
$lang['es_ES']['Customer']['CANTDELETECUSTOMER'] = 
	'No puedes elmiminar a este cliente, debido a que ya tiene ordenes en el sistema.';
$lang['es_ES']['Customer']['ADDRESS'] = 
	'Dirección';
$lang['es_ES']['Customer']['CITY'] = 
	'Ciudad';
$lang['es_ES']['Customer']['STATE'] = 
	'Estado';
$lang['es_ES']['Customer']['POSTALCODE'] = 
	'Código postal';
$lang['es_ES']['Customer']['COUNTRY'] = 
	'País';

// Output for class or file: Form
$lang['es_ES']['Form']['VALIDATIONFAILED'] = 
	'Verificación fallida';
$lang['es_ES']['Form']['VARIATIONS_REQUIRED'] = 
	'Este producto require que selecciones una opción antes de ser añadido al carro.';
$lang['es_ES']['Form']['STOCK_LEVEL'] = 
	'Lo sentimos, este producto está sin stock';
$lang['es_ES']['Form']['STOCK_LEVEL_MORE_THAN_QUANTITY'] = 
	'La cantidad que requieres es mayor que la cantidad disponible, lo sentimos.';
$lang['es_ES']['Form']['ITEM_IS_NOT_IN_ORDER'] = 
	'Este producto no está en el carro.';
$lang['es_ES']['Form']['ITEM_QUANTITY_INCORRECT'] = 
	'La cantidad de este producto debe ser al menos uno (1).';
$lang['es_ES']['Form']['ORDER_IS_NOT_VALID'] = 
	'Tu carro parece estar vacío, por favor agregar al menos un ítem de la tienda';
$lang['es_ES']['Form']['STOCK_LEVEL_NOT_NUMERIC'] = 
	'El stock no es un número.';
$lang['es_ES']['Form']['VARIATION_PRICE_NOT_EXISTS'] = 
	'Existe un problema con el precio de la variante.';
$lang['es_ES']['Form']['VARIATION_PRICE_NEGATIVE'] = 
	'Esta variante tiene un precio negativo.';
$lang['es_ES']['Form']['FLAT_FEE_SHIPPING_NOT_EXISTS'] = 
	'Esta opción de envío ya no está disponible, lo sentimos';
$lang['es_ES']['Form']['SHIPPING_ADDRESS_COUNTRY_NOT_EXISTS'] = 
	'Por favor seleccionar un país para la dirección de envío';
$lang['es_ES']['Form']['FLAT_FEE_SHIPPING_OPTION_NOT_EXISTS'] = 
	'Esta opción de envío ya no está disponible, lo sentimos';
$lang['es_ES']['Form']['FLAT_FEE_SHIPPING_COUNTRY_NOT_MATCH'] = 
	'Esta forma de envío no está disponible para enviar a este país, lo sentimos';

// Output for class or file: StockFieldp
$lang['es_ES']['StockFieldp'][''] = 
	'Stock : %s están en carros de compra, %s en ordenes que no han sido enviadas.';

// Output for class or file: StockField
$lang['es_ES']['StockField']['UNLIMITED'] = 
	'Ilimitado';
$lang['es_ES']['StockField']['SPECIFYSTOCK'] = 
	'Especificar Stock';

// Output for class or file: ComplexTableField
$lang['es_ES']['ComplexTableField']['CLOSEPOPUP'] = 
	'Cerrar Popup';
$lang['es_ES']['ComplexTableField']['SUCCESSADD'] = 
	'%s %s %s agregado';
$lang['es_ES']['ComplexTableField']['SUCCESSEDIT'] = 
	'%s %s %s guardado';

// Output for class or file: FlatFeeShippingRate
$lang['es_ES']['FlatFeeShippingRate']['LABEL'] = 
	'Etiqueta';
$lang['es_ES']['FlatFeeShippingRate']['DESCRIPTION'] = 
	'Descripción';
$lang['es_ES']['FlatFeeShippingRate']['AMOUNT'] = 
	'Monto';
$lang['es_ES']['FlatFeeShippingRate']['COUNTRY'] = 
	'País';
$lang['es_ES']['FlatFeeShippingRate']['NOCOUNTRYSET'] = 
	'No se ha definido País';

// Output for class or file: FlatFeeTaxRate
$lang['es_ES']['FlatFeeTaxRate']['LABEL'] = 
	'Etiqueta';
$lang['es_ES']['FlatFeeTaxRate']['DESCRIPTION'] = 
	'Descripción';
$lang['es_ES']['FlatFeeTaxRate']['AMOUNT'] = 
	'Monto';
$lang['es_ES']['FlatFeeTaxRate']['COUNTRY'] = 
	'País';
$lang['es_ES']['FlatFeeTaxRate']['TAXRATEASAPERCENTAGE'] = 
	'Impuesto como porcentaje';

// Output for class or file: Order_NotificationEmail
$lang['es_ES']['Order_NotificationEmail']['ORDER'] = 
	'Orden';
$lang['es_ES']['Order_NotificationEmail']['LOGIN'] = 
	'Ingresa al sitio para poder editar esta orden';

// Output for class or file: Order_ReceiptEmail
$lang['es_ES']['Order_ReceiptEmail']['HI'] = 
	'Hola';
$lang['es_ES']['Order_ReceiptEmail']['ORDER'] = 
	'Orden';
$lang['es_ES']['Order_ReceiptEmail']['VIEWTHISORDER'] = 
	'Ver esta orden';
$lang['es_ES']['Order_ReceiptEmail']['PAYMENTNOTICE'] = 
	'Por favor notar que las ordenes no serán enviadas hasta que el pago haya sido procesado.';

// Output for class or file: CartForm
$lang['es_ES']['CartForm']['PRODUCT'] = 
	'Producto';
$lang['es_ES']['CartForm']['OPTIONS'] = 
	'Opciones';
$lang['es_ES']['CartForm']['UNITPRICE'] = 
	'Precio unitario';
$lang['es_ES']['CartForm']['QUANTITY'] = 
	'Cantidad';
$lang['es_ES']['CartForm']['SUBTOTAL'] = 
	'Sub Total';
$lang['es_ES']['CartForm']['NOTE'] = 
	'Nota:';
$lang['es_ES']['CartForm']['NOITEMSINYOURCART'] = 
	'No hay ítems en tu carro.';
$lang['es_ES']['CartForm']['POWEREDBY'] = 
	'desarrollado con';

// Output for class or file: CheckoutForm
$lang['es_ES']['CheckoutForm']['YOURORDER'] = 
	'Tu orden';

// Output for class or file: CheckoutFormOrder
$lang['es_ES']['CheckoutFormOrder']['PRODUCT'] = 
	'Producto';
$lang['es_ES']['CheckoutFormOrder']['OPTIONS'] = 
	'Opciones';
$lang['es_ES']['CheckoutFormOrder']['UNITPRICE'] = 
	'Precio unitario';
$lang['es_ES']['CheckoutFormOrder']['QUANTITY'] = 
	'Cantidad';
$lang['es_ES']['CheckoutFormOrder']['SUBTOTAL'] = 
	'Sub Total';
$lang['es_ES']['CheckoutFormOrder']['NOITEMSINYOURCART'] = 
	'No hay ítems en tu carro.';
$lang['es_ES']['CheckoutFormOrder']['TOTAL'] = 
	'Total';

// Output for class or file: Order
$lang['es_ES']['Order']['PRODUCT'] = 
	'Producto';
$lang['es_ES']['Order']['OPTIONS'] = 
	'Opciones';
$lang['es_ES']['Order']['UNITPRICE'] = 
	'Precio unitario';
$lang['es_ES']['Order']['QUANTITY'] = 
	'Cantidad';
$lang['es_ES']['Order']['SUBTOTAL'] = 
	'Sub Total';
$lang['es_ES']['Order']['TOTAL'] = 
	'Total';

// Output for class or file: OrderAddresses
$lang['es_ES']['OrderAddresses']['BILLINGADDRESS'] = 
	'Dirección de facturación';
$lang['es_ES']['OrderAddresses']['SHIPPINGADDRESS'] = 
	'Dirección de envío';

// Output for class or file: OrderAdmin
$lang['es_ES']['OrderAdmin']['ORDER'] = 
	'Orden';

// Output for class or file: OrderNotes
$lang['es_ES']['OrderNotes']['NOTES'] = 
	'Notas';

// Output for class or file: OrderPayments
$lang['es_ES']['OrderPayments']['PAYMENT'] = 
	'Pago';
$lang['es_ES']['OrderPayments']['DATE'] = 
	'Fecha';
$lang['es_ES']['OrderPayments']['AMOUNT'] = 
	'Monto';
$lang['es_ES']['OrderPayments']['PAYMENTSTATUS'] = 
	'Estado de pago';
$lang['es_ES']['OrderPayments']['TOTALOUTSTANDING'] = 
	'Total pendiente';

// Output for class or file: Pagination
$lang['es_ES']['Pagination']['PREV'] = 
	'Previo';
$lang['es_ES']['Pagination']['NEXT'] = 
	'Siguiente';

// Output for class or file: Products
$lang['es_ES']['Products']['NOPRODUCTSTODISPLAY'] = 
	'Lo sentimos, no hay productos para mostrar en esta categoría. Agregaremos más productos a la brevedad!';

// Output for class or file: ShopAdmin_right
$lang['es_ES']['ShopAdmin_right']['LOADING'] = 
	'Cargando...';

// Output for class or file: AccountPage_order
$lang['es_ES']['AccountPage_order']['WARNING'] = 
	'¡Advertencia!';

// ===============
// = Langbuilder =
// ===============
