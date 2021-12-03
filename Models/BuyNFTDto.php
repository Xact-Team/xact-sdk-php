<?php

namespace Xact\Models;

class BuyNFTDto
{
    /* Account ID of the Buyer */
    public $fromAccountId; /* string */
    /* TokenId of the NFT */
    public $tokenId; /* string */
    /* ID of the NFTs to Buy */
    public $nftIds; /* number */
    /* Custom Uniq Id - Identify Browser's that made the request  */
    public $uniqId; /* string */
}
