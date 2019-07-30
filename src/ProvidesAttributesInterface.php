<?php
/**
 * This file is part of phplrt package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
declare(strict_types=1);

namespace Phplrt\Contracts\Ast;

/**
 * Interface ProvidesAttributesInterface
 */
interface ProvidesAttributesInterface
{
    /**
     * Sets an attribute on a node.
     *
     * @param string $name
     * @param mixed|null $default
     * @return mixed
     */
    public function getAttribute(string $name, $default = null);

    /**
     * Returns whether an attribute exists.
     *
     * @param string $name
     * @return bool
     */
    public function hasAttribute(string $name): bool;

    /**
     * Returns all the attributes of this node.
     *
     * @return array
     */
    public function getAttributes(): array;
}
