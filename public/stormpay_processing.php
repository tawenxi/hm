<?php

/*
 * This file is part of the entimm/hm.
 *
 * (c) entimm <entimm@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

header('HTTP/1.1 202 Accepted'); include 'lib/config.inc.php'; $dbconn = db_open(); if (!$dbconn) {
    echo 'Cannot connect mysql';
    exit();
}
    $user_id = sprintf('%d', $frm['user1']);
    $h_id = sprintf('%d', $frm['user2']);
    $compound = sprintf('%d', $frm['user4']);
    $amount = $frm['amount'];
    $batch = $frm['transaction_id'];
    $account = $frm['payer_email'];
    if ($frm['user3'] == 'checkpayment') {
        add_deposit(4, $user_id, $amount, $batch, $account, $h_id, $compound);
    }
}