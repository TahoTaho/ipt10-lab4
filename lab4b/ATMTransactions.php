<?php 

class ATMTransactions {
    private $transaction_id;
    private $date;
    private $type;
    private $amount;
    private $post_balance;

    function modifies () {
        return false;
    }
}

?>