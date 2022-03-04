<?php

namespace Midtrans;
use app\Midtrans;

Veritrans::$serverKey = 'SB-Mid-server-guZ3ImkHre92xlgRWfHDoIdE';

Veritrans::$isProduction = false;

$vt = new Veritrans;

$status = $vt->status(458641390)->transaction_status;

dd($status);

?>
