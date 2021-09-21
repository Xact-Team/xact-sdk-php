<?php

namespace Xact\Models;

class TokenAssociateDto
{
    /* AccountId that associate the token */
    public $fromAccountId; /* string */

    /* Token to Associate */
    public $tokenId; /* string */

    /* Custom Uniq Id - Identify Browser's that made the request  */
    public $uniqId; /* string */
}
