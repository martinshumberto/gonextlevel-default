<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

# USES
use App\Model\Clients;
use App\Model\PlansClients;

class ProspectPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

}
