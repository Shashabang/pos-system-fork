<?php

use PHPUnit\Framework\TestCase;

class LoginLogicTest extends TestCase
{
    public function test_correct_credentials()
    {
        $username = "admin";
        $password = "admin123";

        $isValid = ($username === "admin" && $password === "admin123");

        $this->assertTrue($isValid);
    }

    public function test_wrong_credentials()
    {
        $username = "admin";
        $password = "wrongpass";

        $isValid = ($username === "admin" && $password === "admin123");

        $this->assertFalse($isValid);
    }
}
