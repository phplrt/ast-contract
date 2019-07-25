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
 * A visitor base interface.
 */
interface VisitorInterface
{
    /**
     * @param NodeInterface $node
     * @return NodeInterface
     */
    public function before(NodeInterface $node): NodeInterface;

    /**
     * Called when entering a node.
     *
     * Return value semantics:
     *
     *
     * @param NodeInterface $node
     * @return mixed
     */
    public function enter(NodeInterface $node);

    /**
     * @param NodeInterface $node
     * @return mixed
     */
    public function leave(NodeInterface $node);

    /**
     * @param NodeInterface $node
     * @return NodeInterface
     */
    public function after(NodeInterface $node): NodeInterface;
}
