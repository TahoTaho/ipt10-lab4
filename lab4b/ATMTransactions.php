<?php 

class ATMTransactions {
    $transaction_id;
    $date;
    $type;
    $amount;
    $post_balance;

    function modifies () {
        return false;
    }
}

?>