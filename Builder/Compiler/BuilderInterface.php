<?php

namespace Trismegiste\Mondrian\Builder\Compiler;

use Trismegiste\Mondrian\Visitor\FqcnHelper;

/**
 * BuilderInterface is a contract to build a compiler
 */
interface BuilderInterface
{

    public function buildContext();

    public function buildCollectors();

    public function buildTraverser(FqcnHelper $collector);
}