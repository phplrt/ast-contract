<p align="center">
    <a href="https://railt.org"><img src="https://avatars2.githubusercontent.com/u/49816277?s=128" width="128" alt="Phplrt" /></a>
</p>

## Abstract Syntax Tree Contracts

A set of interfaces for abstraction over abstract syntax tree.

### Interfaces

```php
namespace Phplrt\Contracts\Ast;

interface NodeInterface extends VisitableInterface, \Countable, \IteratorAggregate, \ArrayAccess
{
    public function getType(): string;
    public function getOffset(): int;
}

interface VisitorInterface
{
    public function enter(NodeInterface $node);
    public function leave(NodeInterface $node);
}

interface VisitableInterface
{
    public function visit(VisitorInterface $visitor): void;
}
```
