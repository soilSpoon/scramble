<?php

namespace Dedoc\Scramble;

use Dedoc\Scramble\Support\InferExtensions\JsonResourceCallsTypeInfer;
use Dedoc\Scramble\Support\InferExtensions\JsonResourceStaticCallsTypeInfer;
use Dedoc\Scramble\Support\InferExtensions\JsonResourceTypeInfer;
use Dedoc\Scramble\Support\InferExtensions\PossibleExceptionInfer;
use Dedoc\Scramble\Support\InferExtensions\ResourceCollectionTypeInfer;
use Dedoc\Scramble\Support\InferExtensions\ResponseFactoryTypeInfer;
use Dedoc\Scramble\Support\InferExtensions\ValidatorTypeInfer;

class DefaultExtensions
{
    public static function infer()
    {
        return [
            new PossibleExceptionInfer(),

            new JsonResourceCallsTypeInfer(),
            new JsonResourceStaticCallsTypeInfer(),
            new JsonResourceTypeInfer(),
            new ValidatorTypeInfer(),
            new ResourceCollectionTypeInfer(),
            new ResponseFactoryTypeInfer(),
        ];
    }
}
