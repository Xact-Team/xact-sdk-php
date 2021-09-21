<?php

namespace Xact\Models;

class CreateNFTDto
{
    public $nft: {
      /* Name of the Token */
        public $name; /* string */

        /* Description of the Token */
        public $description; /* string */

        /* Category of the Token */
        public $category; /* string */

        /* Creator of the Token */
        public $creator; /* string */

        /* NFT's Quantity */
        public $supply; /* string */

        /* Add Custom Fee - https://docs.hedera.com/guides/docs/sdks/tokens/custom-token-fees#royalty-fee */
        CustomRoyalties $customRoyaltyFee;
    },

    /* Which Account ID issue the NFT's Creation */
    public $fromAccountId; /* string */

    /* Media linked to the NFT - Must be in base64 */
    public $media; /* string:base64 */

    /* Custom Uniq Id - Identify Browser's that made the request  */
    public $uniqId; /* string */
}
