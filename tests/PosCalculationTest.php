<?php

use PHPUnit\Framework\TestCase;

class PosCalculationTest extends TestCase
{
    public function test_single_item_total()
    {
        $price = 100;
        $qty = 2;

        $total = $price * $qty;

        $this->assertEquals(200, $total);
    }

    public function test_multiple_items_total()
    {
        $items = [
            ['price' => 50, 'qty' => 2],   // 100
            ['price' => 30, 'qty' => 3],   // 90
            ['price' => 20, 'qty' => 1],   // 20
        ];

        $total = 0;
        foreach ($items as $item) {
            $total += $item['price'] * $item['qty'];
        }

        $this->assertEquals(210, $total);
    }
}
