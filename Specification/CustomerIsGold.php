<?php


class CustomerIsGold
{
    public function isSatisfiedBy(Customer $customer)
    {
        $customer->type === 'gold';
    }
}

$spec = new CustomerIsGold();

$spec->isSatisfiedBy(new Customer);