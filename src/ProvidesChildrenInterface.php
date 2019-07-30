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
 * Interface ProvidesChildrenInterface
 */
interface ProvidesChildrenInterface extends \Countable, \IteratorAggregate, \ArrayAccess
{
    /**
     * Returns the list of children nodes.
     *
     * @see \IteratorAggregate::getIterator()
     * @return \Traversable|NodeInterface[]
     */
    public function getIterator(): \Traversable;

    /**
     * Returns count of children nodes.
     *
     * @see \Countable::count()
     * @return int
     */
    public function count(): int;

    /**
     * Returns child node by the index of the node.
     *
     * @see \ArrayAccess::offsetGet()
     * @param int $index
     * @return NodeInterface|null
     */
    public function offsetGet($index): ?NodeInterface;

    /**
     * Sets or overwrites child node by the index of the node.
     *
     * @see \ArrayAccess::offsetSet()
     * @param int|null $index
     * @param NodeInterface $node
     * @return void
     */
    public function offsetSet($index, $node): void;

    /**
     * Returns bool true if the node with passed index argument is
     * exists or false otherwise.
     *
     * @see \ArrayAccess::offsetExists()
     * @param int $index
     * @return bool
     */
    public function offsetExists($index): bool;

    /**
     * Removes a child node by the index of the node.
     *
     * @see \ArrayAccess::offsetUnset()
     * @param int $index
     * @return void
     */
    public function offsetUnset($index): void;
}
