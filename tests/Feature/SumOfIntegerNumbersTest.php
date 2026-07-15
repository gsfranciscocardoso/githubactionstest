<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Services\SumOfIntegerNumbersService;

class SumOfIntegerNumbersTest extends TestCase
{
    protected SumOfIntegerNumbersService $sumOfIntegerNumbersService;

    public function setUp(): void
    {
        parent::setUp();
        $this->sumOfIntegerNumbersService = new SumOfIntegerNumbersService();
    }
    /**
     * A basic feature test example.
     */
    public function testCorrect(): void
    {
        if ($this->sumOfIntegerNumbersService->sum(2, 3) === 5) {
            $this->assertTrue(true);
        } else {
            $this->assertTrue(false);
        }
    }

    public function testIncorrect(): void
    {
        if ($this->sumOfIntegerNumbersService->sum(2, 3) === 6) {
            $this->assertTrue(false);
        } else {
            $this->assertTrue(true);
        }
    }
}
