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
interface ProvidesChildrenInterface extends \IteratorAggregate
{
    /**
     * Returns the list of children nodes.
     *
     * @see \IteratorAggregate::getIterator()
     * @return \Traversable|NodeInterface[]
     */
    public function getIterator(): \Traversable;
}
