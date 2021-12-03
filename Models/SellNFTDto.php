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
    /* ID of the NFTs for sale */
    public $nftIds;  /* Array /*
    /* tokenId of the NFT */
    public $tokenId; /* number */
    /* Custom Uniq Id - Identify Browser's that made the request  */
    public $uniqId; /* string */
   /* The NFT could only be sell to accountId present on that list */
    public $accountIds; /* string */
    /* add a middle men in order to collect fees */
    public $middleMen; /* string */;
}
