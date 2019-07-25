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
 * An interface that provides a set of methods for traversing the tree.
 */
interface VisitableInterface
{
    /**
     * A method that allows you to inject a visitor inside an
     * element of the tree.
     *
     * A simple implementation of this method may look like this:
     * <code>
     *  public function visit(VisitorInterface $visitor): void
     *  {
     *      $visitor->enter($this);
     *
     *      foreach ($this as $child) {
     *          if ($child instanceof VisitableInterface) {
     *              $child->visit($visitor);
     *          }
     *      }
     *
     *      $visitor->leave($this);
     *  }
     * </code>
     *
     * @param VisitorInterface $visitor
     * @return void
     */
    public function visit(VisitorInterface $visitor): void;
}
