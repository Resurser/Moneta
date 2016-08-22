<?php

// Warning! This code was generated by WSDL2PHP tool. 
// author: Filippov Andrey <afi.work@gmail.com> 
// see https://solo-framework-lib.googlecode.com 

namespace Moneta\Types;

/**
 * Тип, описывающий параметры операции в запросах в пакетном режиме.
	 * Request parameters for creating invoices in batch mode.
	 * 
 */
class InvoiceBatchRequestType extends EntityBatchRequestType
{
	
	/**
	 * Набор операций, которые необходимо выполнить в одном пакете. Операции выполняются в том порядке, в котором они переданы в запросе.
	 * The set of transactions that must be processed in a single batch. MONETA.RU processes transactions in the order that they are defined in the request.
	 * 
	 *
	 * @var Entity
	 */
	 public $transaction = null;

	/**
	 * Набор операций, которые необходимо выполнить в одном пакете. Операции выполняются в том порядке, в котором они переданы в запросе.
	 * The set of transactions that must be processed in a single batch. MONETA.RU processes transactions in the order that they are defined in the request.
	 * 
	 *
	 * @param Entity
	 *
	 * @return void
	 */
	public function addTransaction(Entity $item)
	{
		$this->transaction[] = $item;
	}

}
