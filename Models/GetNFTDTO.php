<?php
namespace Xact\Models;

class GetNFTDTO
{
    /* Token ID of the NFT */
    public $tokenId;
    /* Account ID of the seller */
    public $sellerAccountId;
    /* nftId - Optional */
    public $nftId;
   /* Custom Uniq Id - Identify Browser's that made the request  */
    public $uniqId; /* string */
}
