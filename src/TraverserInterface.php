<?php
/**
 * This file is part of ast-contracts package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
declare(strict_types=1);

namespace Phplrt\Contracts\Ast;

/**
 * The TraverserInterface allows to traverse groups of
 * nodes using visitor sets.
 */
interface TraverserInterface
{
    /**
     * If VisitorInterface::enter() returns DONT_TRAVERSE_CHILDREN,
     * child nodes of the current node will not be traversed for any
     * visitors.
     *
     * For subsequent visitors VisitorInterface::enter() will still be
     * called on the current node and VisitorInterface::leave() will also
     * be invoked for the current node.
     *
     * @var int
     */
    public const DONT_TRAVERSE_CHILDREN = 0x01;

    /**
     * If VisitorInterface::enter() returns DONT_TRAVERSE_CURRENT_AND_CHILDREN,
     * child nodes of the current node will not be traversed for any visitors.
     *
     * For subsequent visitors VisitorInterface::enter() will not be called
     * as well. The VisitorInterface::leave() will be invoked for visitors
     * that has VisitorInterface::enter() method invoked.
     *
     * @var int
     */
    public const DONT_TRAVERSE_CURRENT_AND_CHILDREN = 0x02;

    /**
     * If VisitorInterface::enter() or VisitorInterface::::leave()
     * returns STOP_TRAVERSAL, traversal is aborted.
     *
     * The VisitorInterface::after() method will still be invoked.
     *
     * @var int
     */
    public const STOP_TRAVERSAL = 0x03;

    /**
     * If VisitorInterface::leave() returns REMOVE_NODE for a node that
     * occurs in an array, it will be removed from the ast.
     *
     * For subsequent visitors VisitorInterface::leave() will still be
     * invoked for the removed node.
     *
     * @var int
     */
    public const REMOVE_NODE = 0x04;

    /**
     * Adds a visitor.
     *
     * @param VisitorInterface $visitor
     * @return void
     */
    public function add(VisitorInterface $visitor): void;

    /**
     * Traverses the node and its descendants nodes using the
     * registered visitors.
     *
     * @param NodeInterface $node
     * @return NodeInterface
     */
    public function traverse(NodeInterface $node): NodeInterface;
}
