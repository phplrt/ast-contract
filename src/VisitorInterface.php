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
 * Interface VisitorInterface
 */
interface VisitorInterface
{
    /**
     * @param NodeInterface $node
     * @return mixed
     */
    public function enter(NodeInterface $node);

    /**
     * @param NodeInterface $node
     * @return mixed
     */
    public function leave(NodeInterface $node);
}
