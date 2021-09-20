<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\RateLimiter;

use Symfony\Component\Lock\LockInterface;

/**
 * A non locking lock.
 *
 * This can be used to disable locking in classes
 * requiring a lock.
 *
 * @author Wouter de Jong <wouter@wouterj.nl>
 */
final class NoLock implements LockInterface
{
    public function acquire($blocking = false)
    {
        return true;
    }

    public function refresh()
    {
    }

    public function isAcquired()
    {
        return true;
    }

    public function release()
    {
    }

    public function isExpired()
    {
        return false;
    }

    public function getRemainingLifetime()
    {
        return null;
    }
}
