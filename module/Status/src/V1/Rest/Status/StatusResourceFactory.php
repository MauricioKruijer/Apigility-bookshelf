<?php
namespace Status\V1\Rest\Status;

use StatusLib\MapperInterface;

class StatusResourceFactory
{
    public function __invoke($services)
    {
        return new StatusResource($services->get(MapperInterface::class));
    }
}
