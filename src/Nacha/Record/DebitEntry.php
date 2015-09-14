<?php

namespace Nacha\Record;

use Nacha\Field\String;
use Nacha\Field\Number;

// PPD, TEL, WEB debit
class DebitEntry {

	private $recordTypeCode;
	private $transactionCode;
	private $receivingDfiId;
	private $checkDigit;
	private $dFiAccountNumber;
	private $amount;
	private $individualId;
	private $idividualName;
	private $discretionaryData;
	private $addendaRecordIndicator;
	private $traceNumber;

	public function __construct() {
		// defaults
		$this->setRecordTypeCode(6);
		$this->setIndividualId('');
		$this->setDiscretionaryData('');
	}

	public function getRecordTypeCode() {
		return $this->recordTypeCode;
	}
	public function getTransactionCode() {
		return $this->transactionCode;
	}
	public function getReceivingDfiId() {
		return $this->receivingDfiId;
	}
	public function getCheckDigit() {
		return $this->checkDigit;
	}
	public function getDFiAccountNumber() {
		return $this->dFiAccountNumber;
	}
	public function getAmount() {
		return $this->amount;
	}
	public function getIndividualId() {
		return $this->individualId;
	}
	public function getIdividualName() {
		return $this->idividualName;
	}
	public function getDiscretionaryData() {
		return $this->discretionaryData;
	}
	public function getAddendaRecordIndicator() {
		return $this->addendaRecordIndicator;
	}
	public function getTraceNumber() {
		return $this->traceNumber;
	}

	public function setRecordTypeCode($recordTypeCode) {
		$this->recordTypeCode = new Number($recordTypeCode, 1);
		return $this;
	}
	public function setTransactionCode($transactionCode) {
		$this->transactionCode = new Number($transactionCode, 2);
		return $this;
	}
	public function setReceivingDFiId($receivingDfiId) {
		$this->receivingDfiId = new Number($receivingDfiId, 8);
		return $this;
	}
	public function setCheckDigit($checkDigit) {
		$this->checkDigit = new Number($checkDigit, 1);
		return $this;
	}
	public function setDFiAccountNumber($dFiAccountNumber) {
		$this->dFiAccountNumber = new String($dFiAccountNumber, 17);
		return $this;
	}
	public function setAmount($amount) {
		$this->amount = new Number($amount, 10);
		return $this;
	}
	public function setIndividualId($individualId) {
		$this->individualId = new String($individualId, 15);
		return $this;
	}
	public function setIdividualName($idividualName) {
		$this->idividualName = new String($idividualName, 22);
		return $this;
	}
	public function setDiscretionaryData($discretionaryData) {
		$this->discretionaryData = new String($discretionaryData, 2);
		return $this;
	}
	public function setAddendaRecordIndicator($addendaRecordIndicator) {
		$this->addendaRecordIndicator = new Number($addendaRecordIndicator, 1);
		return $this;
	}
	public function setTraceNumber($traceNumber) {
		$this->traceNumber = new Number($traceNumber, 15);
		return $this;
	}

	public function __toString() {
		return $this->recordTypeCode.
			$this->transactionCode.
			$this->receivingDfiId.
			$this->checkDigit.
			$this->dFiAccountNumber.
			$this->amount.
			$this->individualId.
			$this->idividualName.
			$this->discretionaryData.
			$this->addendaRecordIndicator.
			$this->traceNumber;
	}

}
