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
 * Interface NodeInterface
 */
interface NodeInterface
{
    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return int
     */
    public function getOffset(): int;
}
