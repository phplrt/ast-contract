<?php
/**
 * This file is part of Phplrt package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
declare(strict_types=1);

namespace Phplrt\Contracts\Ast;

/**
 * Interface LeafInterface
 */
interface LeafInterface extends NodeInterface
{
    /**
     * @param int $group
     * @return string|null
     */
    public function getValue(int $group = 0): ?string;
}
