<?php

declare(strict_types=1);

namespace Brixion\CsfixerConfig;

use Ergebnis\PhpCsFixer\Config\Factory;
use Ergebnis\PhpCsFixer\Config\RuleSet\Php81 as Php81RuleSet;
use PhpCsFixer\Config;

class Php81
{
    public static function getConfig(): Config
    {
        return Factory::fromRuleSet(new Php81RuleSet(), [
            'native_function_invocation' => false,
            'native_constant_invocation' => false,
            'mb_str_functions' => false,
            'final_class' => false,
            'final_public_method_for_abstract_class' => false,
        ]);
    }
}
