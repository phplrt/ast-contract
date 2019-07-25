<p align="center">
    <a href="https://railt.org"><img src="https://avatars2.githubusercontent.com/u/49816277?s=128" width="128" alt="Phplrt" /></a>
</p>

## Abstract Syntax Tree Contracts

A set of interfaces for abstraction over abstract syntax tree.

### AST Interfaces

```php
namespace Phplrt\Contracts\Ast;

use Phplrt\Contracts\Source\ReadableInterface;

interface NodeInterface extends VisitableInterface, \Countable, \IteratorAggregate, \ArrayAccess
{
    public function getType(): int;
    public function getOffset(): int;
    public function getSource(): ReadableInterface;
}
```

## Visitor Interfaces

```php
namespace Phplrt\Contracts\Ast;

interface VisitableInterface
{
    public function visit(VisitorInterface $visitor): void;
}

interface VisitorInterface
{
    public function before(NodeInterface $node): NodeInterface;
    public function enter(NodeInterface $node);
    public function leave(NodeInterface $node);
    public function after(NodeInterface $node): NodeInterface;
}
```

## Traverser Interface

```php
namespace Phplrt\Contracts\Ast;

interface TraverserInterface
{
    public const DONT_TRAVERSE_CHILDREN = 0x01;
    public const DONT_TRAVERSE_CURRENT_AND_CHILDREN = 0x02;
    public const STOP_TRAVERSAL = 0x03;
    public const REMOVE_NODE = 0x04;
    
    public function add(VisitorInterface $visitor): void;
    public function traverse(NodeInterface $node): NodeInterface;
}
```
