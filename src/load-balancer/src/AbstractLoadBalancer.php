<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf-cloud/hyperf/blob/master/LICENSE
 */

namespace Hyperf\LoadBalancer;

abstract class AbstractLoadBalancer implements LoadBalancerInterface
{
    /**
     * @var Node[]
     */
    protected $nodes;

    public function __construct(iterable $nodes = [])
    {
        $this->nodes = $nodes;
    }
}
