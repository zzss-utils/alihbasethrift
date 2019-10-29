<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */

namespace Sszh\Alihbasethrift;

use Sszh\Alihbasethrift\Serivce\AliHbaseThriftInterface;
use Sszh\Alihbasethrift\Serivce\HbaseFactory;

class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => [
                AliHbaseThriftInterface::class => HbaseFactory::class
            ],
            'commands' => [
            ],
            'annotations' => [
                'scan' => [
                    'paths' => [
                        __DIR__,
                    ],
                ],
            ],
            'publish' => [
                [
                    'id' => 'config',
                    'description' => 'The config of ali hbase client.',
                    'source' => __DIR__ . '/../publish/ali-hbase.php',
                    'destination' => BASE_PATH . '/config/autoload/ali-hbase.php',
                ],
            ],
        ];
    }
}
