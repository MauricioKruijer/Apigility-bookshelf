<?php
namespace Status\V1\Rest\Status;

use StatusLib\ArrayMapper;

class StatusResourceFactory
{
    public function __invoke($services)
    {
        return new StatusResource($services->get(ArrayMapper::class));
    }
}
