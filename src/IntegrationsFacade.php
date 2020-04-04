<?php

namespace Codingfoundry\Integrations;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Codingfoundry\Integrations\Skeleton\SkeletonClass
 */
class IntegrationsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'integrations';
    }
}
