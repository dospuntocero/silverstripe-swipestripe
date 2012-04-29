<?php

i18n::include_locale_file('swipestripe/lang', 'es_ES');

global $lang;

if(array_key_exists('es_ES', $lang) && is_array($lang['es_ES'])) {
	$lang['es_ES'] = array_merge($lang['es_ES'], $lang['es_ES']);
} else {
	$lang['es_ES'] = $lang['es_ES'];
}

$lang['es_ES']['AccountPage']['PLURALNAME'] = array(
	'Tu cuenta',
	50,
	'Nombre del objeto en plural, normalmente utilizado en selectores o para identificar colecciones de objetos de esta interfaz'
);
$lang['es_ES']['AccountPage']['SINGULARNAME'] = array(
	'Tu cuenta',
	50,
	'Nombre del objeto en singular, normalmente utilizado en selectores o para identificar colecciones de objetos de esta interfaz'
);
$lang['es_ES']['Address']['PLURALNAME'] = array(
	'Direcciones',
	50,
	'Nombre del objeto en plural, normalmente utilizado en selectores o para identificar colecciones de objetos de esta interfaz'
);
$lang['es_ES']['Address']['SINGULARNAME'] = array(
	'Dirección',
	50,
	'Nombre del objeto en singular, normalmente utilizado en selectores o para identificar colecciones de objetos de esta interfaz'
);
$lang['es_ES']['Attribute']['PLURALNAME'] = array(
	'Atributos',
	50,
	'Nombre del objeto en plural, normalmente utilizado en selectores o para identificar colecciones de objetos de esta interfaz'
);
$lang['es_ES']['Attribute']['SINGULARNAME'] = array(
	'Attributo',
	50,
	'Nombre del objeto en singular, normalmente utilizado en selectores o para identificar colecciones de objetos de esta interfaz'
);
$lang['es_ES']['CartPage']['PLURALNAME'] = array(
	'Página Carro',
	50,
	'Nombre del objeto en plural, normalmente utilizado en selectores o para identificar colecciones de objetos de esta interfaz'
);
$lang['es_ES']['CartPage']['SINGULARNAME'] = array(
	'Página Carro',
	50,
	'Nombre del objeto en singular, normalmente utilizado en selectores o para identificar colecciones de objetos de esta interfaz'
);
$lang['es_ES']['CheckoutPage']['PLURALNAME'] = array(
	'Página Caja',
	50,
	'Nombre del objeto en plural, normalmente utilizado en selectores o para identificar colecciones de objetos de esta interfaz'
);
$lang['es_ES']['CheckoutPage']['SINGULARNAME'] = array(
	'Página Caja',
	50,
	'Nombre del objeto en singular, normalmente utilizado en selectores o para identificar colecciones de objetos de esta interfaz'
);
$lang['es_ES']['ComplexTableField']['CLOSEPOPUP'] = 'Cerrar Popup';
$lang['es_ES']['ComplexTableField']['SUCCESSADD'] = '%s %s %s Agregado';
$lang['es_ES']['ComplexTableField']['SUCCESSEDIT'] = '%s %s %s Guardado';
$lang['es_ES']['Customer']['PLURALNAME'] = array(
	'Clientes',
	50,
	'Nombre del objeto en plural, normalmente utilizado en selectores o para identificar colecciones de objetos de esta interfaz'
);
$lang['es_ES']['Customer']['SINGULARNAME'] = array(
	'Cliente',
	50,
	'Nombre del objeto en singular, normalmente utilizado en selectores o para identificar colecciones de objetos de esta interfaz'
);
$lang['es_ES']['FlatFeeShipping']['PLURALNAME'] = array(
	'Tarifa plana de envíos',
	50,
	'Nombre del objeto en plural, normalmente utilizado en selectores o para identificar colecciones de objetos de esta interfaz'
);
$lang['es_ES']['FlatFeeShipping']['SINGULARNAME'] = array(
	'Tarifa plana de envío',
	50,
	'Nombre del objeto en singular, normalmente utilizado en selectores o para identificar colecciones de objetos de esta interfaz'
);
$lang['es_ES']['FlatFeeShippingRate']['PLURALNAME'] = array(
	'Tarifa plana de tarifa de envío',
	50,
	'Nombre del objeto en plural, normalmente utilizado en selectores o para identificar colecciones de objetos de esta interfaz'
);
$lang['es_ES']['FlatFeeShippingRate']['SINGULARNAME'] = array(
	'Flat Fee Shipping Rate',
	50,
	'Nombre del objeto en singular, normalmente utilizado en selectores o para identificar colecciones de objetos de esta interfaz'
);
$lang['es_ES']['FlatFeeTax']['PLURALNAME'] = array(
	'Flat Fee Taxs',
	50,
	'Nombre del objeto en plural, normalmente utilizado en selectores o para identificar colecciones de objetos de esta interfaz'
);
$lang['es_ES']['FlatFeeTax']['SINGULARNAME'] = array(
	'Flat Fee Tax',
	50,
	'Nombre del objeto en singular, normalmente utilizado en selectores o para identificar colecciones de objetos de esta interfaz'
);
$lang['es_ES']['FlatFeeTaxRate']['PLURALNAME'] = array(
	'Flat Fee Tax Rats',
	50,
	'Nombre del objeto en plural, normalmente utilizado en selectores o para identificar colecciones de objetos de esta interfaz'
);
$lang['es_ES']['FlatFeeTaxRate']['SINGULARNAME'] = array(
	'Flat Fee Tax Rate',
	50,
	'Nombre del objeto en singular, normalmente utilizado en selectores o para identificar colecciones de objetos de esta interfaz'
);
$lang['es_ES']['Form']['FLAT_FEE_SHIPPING_COUNTRY_NOT_MATCH'] = 'This shipping option is no longer available for the shipping country you have selected sorry';
$lang['es_ES']['Form']['FLAT_FEE_SHIPPING_NOT_EXISTS'] = 'This shipping option is no longer available sorry';
$lang['es_ES']['Form']['FLAT_FEE_SHIPPING_OPTION_NOT_EXISTS'] = 'This shipping option is no longer available sorry';
$lang['es_ES']['Form']['ITEM_IS_NOT_IN_ORDER'] = 'This product is not in the Order.';
$lang['es_ES']['Form']['ITEM_QUANTITY_INCORRECT'] = 'The quantity must be at least one (1).';
$lang['es_ES']['Form']['ORDER_IS_NOT_VALID'] = 'Your cart seems to be empty, please add an item from the shop';
$lang['es_ES']['Form']['SHIPPING_ADDRESS_COUNTRY_NOT_EXISTS'] = 'Please select a country for the shipping address';
$lang['es_ES']['Form']['STOCK_LEVEL'] = '';
$lang['es_ES']['Form']['STOCK_LEVEL_MORE_THAN_QUANTITY'] = 'The quantity is greater than available stock for this product.';
$lang['es_ES']['Form']['STOCK_LEVEL_NOT_NUMERIC'] = 'This stock value is incorrect.';
$lang['es_ES']['Form']['VALIDATIONFAILED'] = 'Validation failed';
$lang['es_ES']['Form']['VARIATIONS_REQUIRED'] = 'This product requires options before it can be added to the cart.';
$lang['es_ES']['Form']['VARIATION_PRICE_NEGATIVE'] = 'This variation price is negative.';
$lang['es_ES']['Form']['VARIATION_PRICE_NOT_EXISTS'] = 'There is a problem with the variation price.';
$lang['es_ES']['Item']['PLURALNAME'] = array(
	'Items',
	50,
	'Nombre del objeto en plural, normalmente utilizado en selectores o para identificar colecciones de objetos de esta interfaz'
);
$lang['es_ES']['Item']['SINGULARNAME'] = array(
	'Item',
	50,
	'Nombre del objeto en singular, normalmente utilizado en selectores o para identificar colecciones de objetos de esta interfaz'
);
$lang['es_ES']['ItemOption']['PLURALNAME'] = array(
	'Item Options',
	50,
	'Nombre del objeto en plural, normalmente utilizado en selectores o para identificar colecciones de objetos de esta interfaz'
);
$lang['es_ES']['ItemOption']['SINGULARNAME'] = array(
	'Item Option',
	50,
	'Nombre del objeto en singular, normalmente utilizado en selectores o para identificar colecciones de objetos de esta interfaz'
);
$lang['es_ES']['ModelAdmin']['DELETED'] = 'Deleted';
$lang['es_ES']['ModelAdmin']['DELETEDFROMLIVE'] = 'Deleted';
$lang['es_ES']['ModelAdmin']['PUBLISHED'] = 'Published';
$lang['es_ES']['ModelAdmin']['ROLLEDBACK'] = 'Rolled back version';
$lang['es_ES']['ModelAdmin']['SAVED'] = 'Saved';
$lang['es_ES']['ModelAdmin']['SEARCHFOR'] = 'Search for:';
$lang['es_ES']['ModelAdmin']['UNPUBLISHED'] = 'Unpublished';
$lang['es_ES']['Modification']['PLURALNAME'] = array(
	'Modifications',
	50,
	'Nombre del objeto en plural, normalmente utilizado en selectores o para identificar colecciones de objetos de esta interfaz'
);
$lang['es_ES']['Modification']['SINGULARNAME'] = array(
	'Modification',
	50,
	'Nombre del objeto en singular, normalmente utilizado en selectores o para identificar colecciones de objetos de esta interfaz'
);
$lang['es_ES']['Modifier']['PLURALNAME'] = array(
	'Modifiers',
	50,
	'Nombre del objeto en plural, normalmente utilizado en selectores o para identificar colecciones de objetos de esta interfaz'
);
$lang['es_ES']['Modifier']['SINGULARNAME'] = array(
	'Modifier',
	50,
	'Nombre del objeto en singular, normalmente utilizado en selectores o para identificar colecciones de objetos de esta interfaz'
);
$lang['es_ES']['Option']['PLURALNAME'] = array(
	'Options',
	50,
	'Nombre del objeto en plural, normalmente utilizado en selectores o para identificar colecciones de objetos de esta interfaz'
);
$lang['es_ES']['Option']['SINGULARNAME'] = array(
	'Option',
	50,
	'Nombre del objeto en singular, normalmente utilizado en selectores o para identificar colecciones de objetos de esta interfaz'
);
$lang['es_ES']['Order']['PLURALNAME'] = array(
	'Orders',
	50,
	'Nombre del objeto en plural, normalmente utilizado en selectores o para identificar colecciones de objetos de esta interfaz'
);
$lang['es_ES']['Order']['SINGULARNAME'] = array(
	'Order',
	50,
	'Nombre del objeto en singular, normalmente utilizado en selectores o para identificar colecciones de objetos de esta interfaz'
);
$lang['es_ES']['Paginate']['NEXT'] = 'Next';
$lang['es_ES']['Paginate']['PREVIOUS'] = 'Previous';
$lang['es_ES']['Product']['PLURALNAME'] = array(
	'Products',
	50,
	'Nombre del objeto en plural, normalmente utilizado en selectores o para identificar colecciones de objetos de esta interfaz'
);
$lang['es_ES']['Product']['SINGULARNAME'] = array(
	'Product',
	50,
	'Nombre del objeto en singular, normalmente utilizado en selectores o para identificar colecciones de objetos de esta interfaz'
);
$lang['es_ES']['ProductCategory']['PLURALNAME'] = array(
	'Product Categories',
	50,
	'Nombre del objeto en plural, normalmente utilizado en selectores o para identificar colecciones de objetos de esta interfaz'
);
$lang['es_ES']['ProductCategory']['SINGULARNAME'] = array(
	'Product Category',
	50,
	'Nombre del objeto en singular, normalmente utilizado en selectores o para identificar colecciones de objetos de esta interfaz'
);
$lang['es_ES']['ProductImage']['PLURALNAME'] = array(
	'Product Imags',
	50,
	'Nombre del objeto en plural, normalmente utilizado en selectores o para identificar colecciones de objetos de esta interfaz'
);
$lang['es_ES']['ProductImage']['SINGULARNAME'] = array(
	'Product Image',
	50,
	'Nombre del objeto en singular, normalmente utilizado en selectores o para identificar colecciones de objetos de esta interfaz'
);
$lang['es_ES']['Shipping']['PLURALNAME'] = array(
	'Shippings',
	50,
	'Nombre del objeto en plural, normalmente utilizado en selectores o para identificar colecciones de objetos de esta interfaz'
);
$lang['es_ES']['Shipping']['SINGULARNAME'] = array(
	'Shipping',
	50,
	'Nombre del objeto en singular, normalmente utilizado en selectores o para identificar colecciones de objetos de esta interfaz'
);
$lang['es_ES']['ShopAdmin']['BACKTOLIST'] = 'Back to list view';
$lang['es_ES']['ShopAdmin']['VIEW'] = 'View Page';
$lang['es_ES']['ShopAdmin']['VIEWDRAFT'] = 'Draft Site';
$lang['es_ES']['ShopAdmin']['VIEWLIVE'] = 'Live Site';
$lang['es_ES']['ShopSettings']['FROM'] = 'From';
$lang['es_ES']['ShopSettings']['LICENSEKEY'] = 'License Key';
$lang['es_ES']['ShopSettings']['MESSAGE'] = 'Message (order details are included in the email)';
$lang['es_ES']['ShopSettings']['NOTIFICATION_FROM'] = 'Customer email address';
$lang['es_ES']['ShopSettings']['RECEIPT_TO'] = 'Sent to customer';
$lang['es_ES']['ShopSettings']['SIGNATURE'] = 'Signature';
$lang['es_ES']['ShopSettings']['SUBJECT_LINE'] = 'Subject line';
$lang['es_ES']['ShopSettings']['TO'] = 'To';
$lang['es_ES']['StockLevel']['PLURALNAME'] = array(
	'Stock Levels',
	50,
	'Nombre del objeto en plural, normalmente utilizado en selectores o para identificar colecciones de objetos de esta interfaz'
);
$lang['es_ES']['StockLevel']['SINGULARNAME'] = array(
	'Stock Level',
	50,
	'Nombre del objeto en singular, normalmente utilizado en selectores o para identificar colecciones de objetos de esta interfaz'
);
$lang['es_ES']['Variation']['PLURALNAME'] = array(
	'Variations',
	50,
	'Nombre del objeto en plural, normalmente utilizado en selectores o para identificar colecciones de objetos de esta interfaz'
);
$lang['es_ES']['Variation']['SINGULARNAME'] = array(
	'Variation',
	50,
	'Nombre del objeto en singular, normalmente utilizado en selectores o para identificar colecciones de objetos de esta interfaz'
);

?>