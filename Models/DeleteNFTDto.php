<?php

namespace Xact\Models;

class DeleteNFTDto
{
    /* tokenId of the NFT */
    public $tokenId; /* number */
    /* ID of the NFTs you want to delete */
    public $nftIds;  /* Array /*
    /* Custom Uniq Id - Identify Browser's that made the request  */
    public $uniqId; /* string */
}
