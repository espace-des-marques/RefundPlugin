<?php

namespace spec\Sylius\RefundPlugin\Factory;

use PhpSpec\ObjectBehavior;
use Sylius\RefundPlugin\Entity\Refund;
use Sylius\RefundPlugin\Factory\RefundFactoryInterface;

final class RefundFactorySpec extends ObjectBehavior
{
    function it_implements_refund_factory_interface(): void
    {
        $this->shouldImplement(RefundFactoryInterface::class);
    }

    function it_allows_to_create_refund_with_given_data(): void
    {
        $refund = new Refund();
        $refund->setOrderNumber('0001');
        $refund->setRefundedUnitId(1);
        $refund->setAmount(1000);

        $this->createWithData('0001', 1, 1000)->shouldBeLike($refund);
    }
}
