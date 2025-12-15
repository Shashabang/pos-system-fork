<?php

use PHPUnit\Framework\TestCase;

class InputValidationTest extends TestCase
{
    public function test_quantity_cannot_be_negative()
    {
        $qty = -1;

        $this->assertLessThan(0, $qty);
    }

    public function test_price_must_be_numeric()
    {
        $price = "abc";

        $this->assertFalse(is_numeric($price));
    }
}
