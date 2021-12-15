<?php

namespace Xact\Models;

class BuyNFTDto
{
    /* Account ID of the Buyer */
    public $fromAccountId; /* string */
    /* Account ID of the Seller */
    public $sellerAccountId: string;
    /* TokenId of the NFT */
    public $tokenId; /* string */
    /* ID of the NFTs to Buy */
    public $nftIds; /* number */
    /* NFT to buy is link to a collection */
    public $collectionId; /* string */
    /* Custom Uniq Id - Identify Browser's that made the request  */
    public $uniqId; /* string */
}
