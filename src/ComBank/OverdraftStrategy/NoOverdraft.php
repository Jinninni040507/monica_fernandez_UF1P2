<?php namespace ComBank\OverdraftStrategy;
      use ComBank\OverdraftStrategy\Contracts\OverdraftInterface;

/**
 * Created by VS Code.
 * User: JPortugal
 * Date: 7/28/24
 * Time: 12:27 PM
 */

class NoOverdraft implements OverdraftInterface
{
    function isGrantOverdraftFunds(float $balanceResult): bool{
        return $balanceResult>=0;
    }

    function getOverdraftFundsAmount(): float{
        return 0;
    }
   
}
