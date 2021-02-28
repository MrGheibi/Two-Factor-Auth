<?php

namespace TwoFactorAuth\Facades;

use TwoFactorAuth\TokenGenerator;

class TokenGeneratorFacade extends BaseFacade
{
    const key = TokenGenerator::class;
}
