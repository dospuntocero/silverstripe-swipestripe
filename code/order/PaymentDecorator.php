<?php
/**
 * Mixin to augment the {@link Payment} class.
 * Payment statuses: Incomplete,Success,Failure,Pending
 * 
 * @author Frank Mullenger <frankmullenger@gmail.com>
 * @copyright Copyright (c) 2011, Frank Mullenger
 * @package swipestripe
 * @subpackage order
 * @version 1.0
 */
class PaymentDecorator extends DataObjectDecorator {

  /**
   * Extra fields to be added to the {@link Payment} class.
   * 
   * @see DataObjectDecorator::extraStatics()
   */
	function extraStatics() {

		return array(
			'has_one' => array(
				'Order' => 'Order' //Need to add Order here for ModelAdmin
			),
			'summary_fields' => array(
			  'ID' => 'Payment ID',
			  'SummaryOfAmount' => 'Amount',
			  'SummaryOfType' => 'Type',
			  'PaidBy.Name' => 'Customer'
			)
		);
	}

	/**
	 * Cannot create {@link Payment}s in the CMS.
	 * 
	 * @see DataObjectDecorator::canCreate()
	 * @return Boolean False always
	 */
	function canCreate($member = null) {
		return false;
	}

	/**
	 * Cannot delete {@link Payment}s in the CMS.
	 * 
	 * @see DataObjectDecorator::canDelete()
	 * @return Boolean False always
	 */
	function canDelete($member = null) {
		return false;
	}
	
	/**
	 * Helper to get a nicely formatted amount for this {@link Payment}
	 * 
	 * @return String Payment amount formatted with Nice()
	 */
	function SummaryOfAmount() {
	  return $this->owner->dbObject('Amount')->Nice();
	}
	
	/**
	 * Helper to get type of {@link Payment} depending on payment class used.
	 * 
	 * @return String Payment class name with camel case exploded
	 */
	function SummaryOfType() {
	  return implode(' ', preg_split('/(?<=\\w)(?=[A-Z])/', $this->owner->ClassName));
	}
	
	/**
	 * Fields to display this {@link Payment} in the CMS, removed some of the 
	 * unnecessary fields.
	 * 
	 * @see DataObjectDecorator::updateCMSFields()
	 * @return FieldSet
	 */
  function updateCMSFields(FieldSet &$fields) {

    $toBeRemoved = array(
      'IP',
      'ProxyIP',
      'PaidForID',
      'PaidForClass',
      'PaymentDate',
      'ExceptionError',
      'Token',
      'PayerID',
      'RecurringPaymentID'
    );
	  foreach($toBeRemoved as $field) {
			$fields->removeByName($field);
		}
		
		$toBeReadOnly = array(
		  'TransactionID',
		  'PaidByID'
		);
		foreach ($toBeReadOnly as $field) {
		  if ($fields->fieldByName($field)) {
		    $fields->makeFieldReadonly($field);
		  }
		}
    
    return $fields;
	}

	/**
	 * After payment success process onAfterPayment() in {@link Order}.
	 * 
	 * @see Order::onAfterPayment()
	 * @see DataObjectDecorator::onAfterWrite()
	 */
	function onAfterWrite() {

	  $order = $this->owner->PaidObject();

		if ($order && $order instanceof Order) {
		  $order->onAfterPayment();
		}
	}
	
	/**
	 * For the purpose of certain payment gateways.
	 * 
	 * @see PaystationHostedPayment_Handler::complete()
	 */
	function redirectToOrder() {
	  $order = $this->owner->PaidObject();

		if ($order && $order instanceof Order) {
		  Director::redirect($order->Link());
		}
	}
}