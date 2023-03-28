<?php

declare(strict_types=1);

namespace Tests\Unit;

use MilesChou\Laravel\Pennant\Sample;
use Tests\TestCase;

class SampleTest extends TestCase
{
    /**
     * @test
     */
    public function sample(): void
    {
        $this->assertTrue((new Sample())->alwaysTrue());
    }
}
