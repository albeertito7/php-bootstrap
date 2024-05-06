<?php

namespace Albeertito7\PhpBootstrapTest\unit;

use Albeertito7\PhpBootstrap\Code;
use PHPUnit\Framework\TestCase;

final class CodeTest extends TestCase {

    /** @test */
    public function itShouldLightMeUp(): void {

        $code = new Code();

        self::assertIsString($code->lightMeUp()); // is advice
        self::assertEquals("Silence is golden", $code->lightMeUp());
    }

}
