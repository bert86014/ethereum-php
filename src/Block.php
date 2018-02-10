<?php
/**
 * @file
 * This is a file generated by scripts/generate-complex-datatypes.php.
 * 
 * DO NOT EDIT THIS FILE.
 * 
 * @ingroup generated
  * @ingroup dataTypesComplex
 */
namespace Ethereum;

/**
 * Ethereum data type Block.
 * 
 * Generated by scripts/generate-complex-datatypes.php based on resources/ethjs-schema.json.
 */
class Block extends EthDataType {

	/**
	 * Value for 'number'.
	 */
	public $number;

	/**
	 * Value for 'hash'.
	 */
	public $hash;

	/**
	 * Value for 'parentHash'.
	 */
	public $parentHash;

	/**
	 * Value for 'nonce'.
	 */
	public $nonce;

	/**
	 * Value for 'sha3Uncles'.
	 */
	public $sha3Uncles;

	/**
	 * Value for 'logsBloom'.
	 */
	public $logsBloom;

	/**
	 * Value for 'transactionsRoot'.
	 */
	public $transactionsRoot;

	/**
	 * Value for 'stateRoot'.
	 */
	public $stateRoot;

	/**
	 * Value for 'receiptsRoot'.
	 */
	public $receiptsRoot;

	/**
	 * Value for 'miner'.
	 */
	public $miner;

	/**
	 * Value for 'difficulty'.
	 */
	public $difficulty;

	/**
	 * Value for 'totalDifficulty'.
	 */
	public $totalDifficulty;

	/**
	 * Value for 'extraData'.
	 */
	public $extraData;

	/**
	 * Value for 'size'.
	 */
	public $size;

	/**
	 * Value for 'gasLimit'.
	 */
	public $gasLimit;

	/**
	 * Value for 'gasUsed'.
	 */
	public $gasUsed;

	/**
	 * Value for 'timestamp'.
	 */
	public $timestamp;

	/**
	 * Value for 'transactions'.
	 */
	public $transactions;

	/**
	 * Value for 'uncles'.
	 */
	public $uncles;

	/**
	 * @param EthQ $number
	 * @param EthD32 $hash
	 * @param EthD32 $parentHash
	 * @param EthD $nonce
	 * @param EthD $sha3Uncles
	 * @param EthD $logsBloom
	 * @param EthD $transactionsRoot
	 * @param EthD $stateRoot
	 * @param EthD $receiptsRoot
	 * @param EthD $miner
	 * @param EthQ $difficulty
	 * @param EthQ $totalDifficulty
	 * @param EthD $extraData
	 * @param EthQ $size
	 * @param EthQ $gasLimit
	 * @param EthQ $gasUsed
	 * @param EthQ $timestamp
	 * @param array $transactions Array of Transaction
	 * @param array $uncles Array of EthD
	 */
	public function __construct(EthQ $number = null, EthD32 $hash = null, EthD32 $parentHash = null, EthD $nonce = null, EthD $sha3Uncles = null, EthD $logsBloom = null, EthD $transactionsRoot = null, EthD $stateRoot = null, EthD $receiptsRoot = null, EthD $miner = null, EthQ $difficulty = null, EthQ $totalDifficulty = null, EthD $extraData = null, EthQ $size = null, EthQ $gasLimit = null, EthQ $gasUsed = null, EthQ $timestamp = null, array $transactions = null, array $uncles = null) {
		$this->number = $number;  
		$this->hash = $hash;  
		$this->parentHash = $parentHash;  
		$this->nonce = $nonce;  
		$this->sha3Uncles = $sha3Uncles;  
		$this->logsBloom = $logsBloom;  
		$this->transactionsRoot = $transactionsRoot;  
		$this->stateRoot = $stateRoot;  
		$this->receiptsRoot = $receiptsRoot;  
		$this->miner = $miner;  
		$this->difficulty = $difficulty;  
		$this->totalDifficulty = $totalDifficulty;  
		$this->extraData = $extraData;  
		$this->size = $size;  
		$this->gasLimit = $gasLimit;  
		$this->gasUsed = $gasUsed;  
		$this->timestamp = $timestamp;  
		$this->transactions = $transactions;  
		$this->uncles = $uncles;
	}

	/**
	 * Returns a name => type array.
	 */
	public static function getTypeArray() {
		return array( 
			'number' => 'EthQ',
			'hash' => 'EthD32',
			'parentHash' => 'EthD32',
			'nonce' => 'EthD',
			'sha3Uncles' => 'EthD',
			'logsBloom' => 'EthD',
			'transactionsRoot' => 'EthD',
			'stateRoot' => 'EthD',
			'receiptsRoot' => 'EthD',
			'miner' => 'EthD',
			'difficulty' => 'EthQ',
			'totalDifficulty' => 'EthQ',
			'extraData' => 'EthD',
			'size' => 'EthQ',
			'gasLimit' => 'EthQ',
			'gasUsed' => 'EthQ',
			'timestamp' => 'EthQ',
			'transactions' => 'Transaction',
			'uncles' => 'EthD',
		);
	}

	/**
	 * Returns array with values.
	 */
	public function toArray() {
		$return = [];
		(!is_null($this->number)) ? $return['number'] = $this->number->hexVal() : NULL; 
		(!is_null($this->hash)) ? $return['hash'] = $this->hash->hexVal() : NULL; 
		(!is_null($this->parentHash)) ? $return['parentHash'] = $this->parentHash->hexVal() : NULL; 
		(!is_null($this->nonce)) ? $return['nonce'] = $this->nonce->hexVal() : NULL; 
		(!is_null($this->sha3Uncles)) ? $return['sha3Uncles'] = $this->sha3Uncles->hexVal() : NULL; 
		(!is_null($this->logsBloom)) ? $return['logsBloom'] = $this->logsBloom->hexVal() : NULL; 
		(!is_null($this->transactionsRoot)) ? $return['transactionsRoot'] = $this->transactionsRoot->hexVal() : NULL; 
		(!is_null($this->stateRoot)) ? $return['stateRoot'] = $this->stateRoot->hexVal() : NULL; 
		(!is_null($this->receiptsRoot)) ? $return['receiptsRoot'] = $this->receiptsRoot->hexVal() : NULL; 
		(!is_null($this->miner)) ? $return['miner'] = $this->miner->hexVal() : NULL; 
		(!is_null($this->difficulty)) ? $return['difficulty'] = $this->difficulty->hexVal() : NULL; 
		(!is_null($this->totalDifficulty)) ? $return['totalDifficulty'] = $this->totalDifficulty->hexVal() : NULL; 
		(!is_null($this->extraData)) ? $return['extraData'] = $this->extraData->hexVal() : NULL; 
		(!is_null($this->size)) ? $return['size'] = $this->size->hexVal() : NULL; 
		(!is_null($this->gasLimit)) ? $return['gasLimit'] = $this->gasLimit->hexVal() : NULL; 
		(!is_null($this->gasUsed)) ? $return['gasUsed'] = $this->gasUsed->hexVal() : NULL; 
		(!is_null($this->timestamp)) ? $return['timestamp'] = $this->timestamp->hexVal() : NULL; 
		(!is_null($this->transactions)) ? $return['transactions'] = EthereumStatic::valueArray($this->transactions, 'Transaction') : array(); 
		(!is_null($this->uncles)) ? $return['uncles'] = EthereumStatic::valueArray($this->uncles, 'EthD') : array(); 
		return $return;
	}
}