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
 * Interface NodeInterface
 */
interface NodeInterface extends VisitableInterface, \Countable, \IteratorAggregate, \ArrayAccess
{
    /**
     * @return string
     */
    public function getType(): string;

    /**
     * @return int
     */
    public function getOffset(): int;

    /**
     * @return ReadableInterface
     */
    public function getSource(): ReadableInterface;
}
