<?php

namespace JakeRw\AwsRekognition;

use Illuminate\Support\Facades\Facade;

/**
 * @see \JakeRw\AwsRekognition\Skeleton\SkeletonClass
 */
class AwsRekognitionFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'aws-rekognition';
    }
}
