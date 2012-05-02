<?php
namespace models;

/**
 * @Entity
 * @Table(name="smallscalea2")
 */
class E_smallScaleA2 {
	/*
	 * @Id
	 * @Column(name="smallScaleId", type="int", length=11, nullable=false)
	 * */
	private $smallScaleId;
	/*
	 * @Column(name="dates", type="varchar",length=45, nullable=true)
	 * */
	private $dates;
	/*
	 * @Column(name="manufacturerCompName", type="varchar",length=45, nullable=true)
	 * */
	private $manufacturerCompName;
	/*
	 * @Column(name="weightKg", type="double", nullable=true)
	 * */
	private $weightKg;
	/*
	 * @Column(name="lotNumber", type="varchar",length=45, nullable=true)
	 * */
	private $lotNumber;
	/*
	 * @Column(name="contentOfIodine", type="double", nullable=true)
	 * */
	private $contentOfIodine;
	/*
	 * @Column(name="amountUsed", type="double", nullable=true)
	 * */
	private $amountUsed;

	public function getTransactionNumber() {
		return $this -> transactionNumber;
	}

	public function setTransactionNumber($transactionNumber) { $this -> transactionNumber = $transactionNumber;
	}

	public function getDates() {
		return $this -> dates;
	}

	public function setDates($dates) { $this -> dates = $dates;
	}

	public function getManufacturerCompName() {
		return $this -> manufacturerCompName;
	}

	public function setManufacturerCompName($manufacturerCompName) { $this -> manufacturerCompName = $manufacturerCompName;
	}

	public function getWeightKg() {
		return $this -> weightKg;
	}

	public function setWeightKg($weightKg) { $this -> weightKg = $weightKg;
	}

	public function getLotNumber() {
		return $this -> lotNumber;
	}

	public function setLotNumber($lotNumber) { $this -> lotNumber = $lotNumber;
	}

	public function getContentOfIodine() {
		return $this -> contentOfIodine;
	}

	public function setContentOfIodine($contentOfIodine) { $this -> contentOfIodine = $contentOfIodine;
	}

	public function getAmountUsed() {
		return $this -> amountUsed;
	}

	public function setAmountUsed($amountUsed) { $this -> amountUsed = $amountUsed;
	}

}
?>