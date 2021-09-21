<?php

namespace Xact\Models;

class SellNFTDto
{
    /* Account ID of the seller */
    public $fromAccountId; /* string */
    /* Unit Price per NFT in Hbar */
    public $hbarAmount; /* number */
    /* Quantity for sale */
    public $quantity; /* number */
    /* tokenId of the NFT */
    public $tokenId; /* number */
    /* Custom Uniq Id - Identify Browser's that made the request  */
    public $uniqId; /* string */
}
