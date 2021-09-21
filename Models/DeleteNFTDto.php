<?php

namespace Xact\Models;

class DeleteNFTDto
{
    /* tokenId of the NFT */
    public $tokenId; /* number */
    /* Custom Uniq Id - Identify Browser's that made the request  */
    public $uniqId; /* string */
}
