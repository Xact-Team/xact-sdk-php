<?php

namespace Xact\Models;

class TokenTransferDto
{
    /* From which account to transfer the token */
    public $fromAccountId; /* string */

    /* Account that receive the token */
    public $toAccountId; /* string */

    /* Token to Transfer */
    public $tokenId; /* string */

    /* Supply */
    public $supply = 1; /* number */
}
