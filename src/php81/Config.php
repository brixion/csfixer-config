<?php

declare(strict_types=1);

namespace Brixion\CsfixerConfig\php81;

use Ergebnis\PhpCsFixer\Config\Factory;
use Ergebnis\PhpCsFixer\Config\RuleSet\Php81;
use PhpCsFixer\Config as PhpCsFixerConfig;

class Config
{
    public static function getCsFixerConfig(): PhpCsFixerConfig
    {
        return Factory::fromRuleSet(new Php81(), [
            'native_function_invocation' => false,
            'native_constant_invocation' => false,
            'mb_str_functions' => false,
            'final_class' => false,
            'final_public_method_for_abstract_class' => false,
        ]);
    }
}
