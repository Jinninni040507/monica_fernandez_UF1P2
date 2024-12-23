<?php namespace ComBank\Transactions;

/**
 * Created by VS Code.
 * User: JPortugal
 * Date: 7/28/24
 * Time: 1:24 PM
 */

use ComBank\Exceptions\InvalidArgsException;
use ComBank\Exceptions\ZeroAmountException;
use ComBank\Transactions\Contracts\BankTransactionInterface;
use ComBank\Support\Traits\AmountValidationTrait;

abstract class BaseTransaction
{
    use AmountValidationTrait;
    protected float $amount;
    
    public function __construct(float $amount) 
    {
        $this->validateAmount($amount);

        $this->amount = $amount;
    }
}
