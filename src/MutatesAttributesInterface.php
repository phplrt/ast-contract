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
 * Interface MutatesAttributesInterface
 */
interface MutatesAttributesInterface extends ProvidesAttributesInterface
{
    /**
     * Sets an attribute on a node.
     *
     * @param string $name
     * @param mixed $value
     */
    public function setAttribute(string $name, $value);

    /**
     * Replaces all the attributes of this node.
     *
     * @param array $attributes
     */
    public function setAttributes(array $attributes);
}
