<?php
/**
 * This file is part of phplrt package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
declare(strict_types=1);

namespace Phplrt\Parser;

use Phplrt\Io\Readable;
use Phplrt\Ast\RuleInterface;

/**
 * Interface ParserInterface
 */
interface ParserInterface
{
    /**
     * @param Readable $input
     * @return RuleInterface|mixed
     */
    public function parse(Readable $input);

    /**
     * @param string $rule
     * @param \Closure $then
     * @return ParserInterface|$this
     */
    public function extend(string $rule, \Closure $then): self;
}