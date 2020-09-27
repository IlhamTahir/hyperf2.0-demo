<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace App\Rpc\JsonRpc;

use Hyperf\Di\Annotation\Inject;

class TestService
{
    /**
     * @Inject
     * @var IdGenerateInterface
     */
    protected $idGenerator;

    public function methods()
    {
        return [
            __METHOD__,
            __FUNCTION__,
        ];
    }
}
