<?php

declare(strict_types=1);

namespace spec\App\Supplier\Resolver;

use App\Supplier\Resolver\ResolverInterface;
use PhpSpec\ObjectBehavior;

final class SupplierResourceResolver extends ObjectBehavior
{
    public function it_is_a_resolver(): void
    {
        $this->shouldImplement(ResolverInterface::class);
    }
}
