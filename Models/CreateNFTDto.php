<?php

namespace Xact\Models;

class CreateNFTDto
{
    /* Name of the Token */
    public $name; /* string */

    /* Description of the Token */
    public $description; /* string */

    /* Category of the Token */
    public $category; /* string */

    /* Creator of the Token */
    public $creator; /* string */

    /* Media to linked to the NFT - Must be in base64 */
    public $media; /* string:base64 */

    /* NFT's Quantity */
    public $supply; /* string */

    /* Which Account ID issue the NFT's Creation */
    public $fromAccountId; /* string */
}
