<?php

declare(strict_types=1);

namespace Sszh\Alihbasethrift\Serivce;

use Hyperf\Contract\ConfigInterface;
use Psr\Container\ContainerInterface;

class HbaseFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $config = $container->get(ConfigInterface::class)->get('ali-hbase.default');

        return make(AliHbaseThriftService::class, $config);
    }
}
