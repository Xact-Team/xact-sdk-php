<?php

namespace Xact\Models;

class PaymentDto
{
    /* Hbar to transfer */
    public $hbarAmount; /* string */

    /* AccountId that send the Hbar */
    public $fromAccountId; /* string */

    /* AccountId that received the Hbar */
    public $toAccountId; /* string */

    /* add a memo */
    public $memo = null; /* string */

    /* add a middle men in order to collect fees */
    public $middleMen = null; /* MiddleManPayment[] */

    /* Support the Xact Team - round up fees */
    public $supportXact = null; /* boolean */

    /* Custom Uniq Id - Identify Browser's that made the request  */
    public $uniqId; /* string */
}
