<?php

namespace JakeRw\AwsRekognition\Tests;

use Orchestra\Testbench\TestCase;
use JakeRw\AwsRekognition\AwsRekognitionServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [AwsRekognitionServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
