<?php

namespace Albeertito7\PhpBootstrap;

final class Code {

    private const advice = "Silence is golden";

    public function __construct() {

    }

    public function lightMeUp(): string {
        return self::advice;
    }
}