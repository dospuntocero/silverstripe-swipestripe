<?php
/**
 * Tax rates that can be set in {@link SiteConfig}. Several flat rates can be set 
 * for any supported shipping country.
 * 
 * @author Frank Mullenger <frankmullenger@gmail.com>
 * @copyright Copyright (c) 2011, Frank Mullenger
 * @package swipestripe
 * @subpackage shipping
 * @version 1.0
 */
class FlatFeeTaxRate extends DataObject {
  
  /**
   * Fields for this tax rate
   * 
   * @var Array
   */
  public static $db = array(
    'Title' => 'Varchar',
    'Description' => 'Varchar',
    'Amount' => 'Money',
    'CountryCode' => 'Varchar(2)', //Two letter country codes for ISO 3166-1 alpha-2
  	'Rate' => 'Decimal(18,2)'
	);
	
	/**
	 * Tax rates are associated with SiteConfigs.
	 * 
	 * TODO The CTF in SiteConfig does not save the SiteConfig ID correctly so this is moot
	 * 
	 * @var unknown_type
	 */
	static $has_one = array (
    'SiteConfig' => 'SiteConfig'
  );
	
  /**
   * Field for editing a {@link FlatFeeTaxRate}.
   * 
   * @return FieldSet
   */
  public function getCMSFields_forPopup() {

    $fields = new FieldSet();
    
    $fields->push(new TextField('Title', _t('FlatFeeTaxRate.LABEL',"Label")));
    $fields->push(new TextField('Description', _t('FlatFeeTaxRate.DESCRIPTION',"Description")));
    
    $amountField = new MoneyField('Amount',_t('FlatFeeTaxRate.AMOUNT',"Amount"));
		$amountField->setAllowedCurrencies(Product::$allowed_currency);
    $fields->push($amountField);
    
    $countryField = new DropdownField('CountryCode', _t('FlatFeeTaxRate.COUNTRY',"Country"), Shipping::supported_countries());
    $fields->push($countryField);
    
    $rateField = new NumericField('Rate', _t('FlatFeeTaxRate.TAXRATEASAPERCENTAGE',"Tax rate as a percentage"));
    $fields->push($rateField);

    return $fields;
  }
  
  /**
   * Label for using on {@link FlatFeeTaxField}s.
   * 
   * @see FlatFeeTaxField
   * @return String
   */
  public function Label() {
    return $this->Title . ' ' . $this->SummaryOfRate();
  }
  
  /**
   * Summary of the amount
   * 
   * @return String Amount formatted with Nice()
   */
  public function SummaryOfAmount() {
    return $this->Amount->Nice();
  }
  
  /**
   * Summary of the current tax rate
   * 
   * @return String
   */
  public function SummaryOfRate() {
    return $this->Rate . ' %';
  }
  
  /**
   * Country name for a given country code
   * 
   * @return String Name of country
   */
  public function SummaryOfCountryCode() {
    $supportedCountries = Shipping::supported_countries();
    if (in_array($this->CountryCode, array_keys($supportedCountries))) {
      return $supportedCountries[$this->CountryCode];
    }
    return 'No Country Set';
  }
	
}