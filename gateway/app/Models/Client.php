<?php

namespace App\Models;

use Laravel\Passport\Client as BaseClient;

class Client extends BaseClient
{
    /**
     * Determine if the client should skip the authorization prompt.
     */

    #[\Override]
    public function skipsAuthorization(): bool
    {
        return $this->firstParty();
    }
}
