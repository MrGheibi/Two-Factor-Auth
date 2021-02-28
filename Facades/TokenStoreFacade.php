<?php

namespace TwoFactorAuth\Facades;

use TwoFactorAuth\TokenStore;

class TokenStoreFacade extends BaseFacade
{
    const key = TokenStore::class;
}
