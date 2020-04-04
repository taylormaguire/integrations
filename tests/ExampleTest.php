<?php

namespace Codingfoundry\Integrations\Tests;

use Orchestra\Testbench\TestCase;
use Codingfoundry\Integrations\IntegrationsServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [IntegrationsServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
