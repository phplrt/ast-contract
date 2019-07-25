<?php
/**
 * This file is part of phplrt package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
declare(strict_types=1);

namespace Phplrt\Contracts\Ast;

use Phplrt\Contracts\Source\ReadableInterface;

/**
 * An abstract node representation. Each node of the tree denotes a
 * construct occurring in the source code.
 *
 * The NodeInterface provided by an abstract syntax trees (AST) are
 * data structures widely used in compilers to represent the structure of
 * program code. An AST is usually the result of the syntax analysis phase
 * of a compiler.
 *
 * It often serves as an intermediate representation of the program
 * through several stages that the parser\compiler requires, and has a
 * strong impact on the final output of the parser\compiler.
 */
interface NodeInterface extends VisitableInterface, \Countable, \IteratorAggregate, \ArrayAccess
{
    /**
     * Returns the type (aka kind) of the node.
     *
     * @return int
     */
    public function getType(): int;

    /**
     * Returns offset in bytes the node started in.
     *
     * @return int
     */
    public function getOffset(): int;

    /**
     * Returns source data object where the node defines in.
     *
     * @return ReadableInterface
     */
    public function getSource(): ReadableInterface;

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
