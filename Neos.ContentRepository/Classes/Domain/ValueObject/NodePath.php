<?php

namespace Neos\ContentRepository\Domain\ValueObject;

/*
 * This file is part of the Neos.ContentRepository package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

final class NodePath implements \JsonSerializable
{

    /**
     * @var string
     */
    private $path;

    public function __construct(string $path)
    {
        $this->path = $path;
    }

    public function isRoot(): bool
    {
        return $this->path === '/';
    }

    public function jsonSerialize()
    {
        return $this->path;
    }

    public function __toString()
    {
        return $this->path;
    }
}