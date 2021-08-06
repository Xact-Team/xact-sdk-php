<?php

namespace Xact\Models;

class MiddleManPayment
{
    /* AccountId that collect fees */
    public $middleManAccountId; /* string */

    /* Type of fees */
    public $middleManTypeOfFees; /* MiddleManFeesType */

    /* Fees */
    public $middleManFees; /* string */
}
