<?php

namespace Xact\Models;

class RefreshAccountDTO
{
    /* Account ID of the user to refresh */
    public $accountId; /* string */
    /* Scope */
    public $scope; /* Array of ScopeEnum */
}
