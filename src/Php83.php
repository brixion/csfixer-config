<?php

declare(strict_types=1);

namespace Brixion\CsfixerConfig;

use Ergebnis\PhpCsFixer\Config\Factory;
use Ergebnis\PhpCsFixer\Config\RuleSet\Php83 as rulesetPhp83;
use PhpCsFixer\Config;

class Php83
{
    public static function getConfig(): Config
    {
        $ruleSet = rulesetPhp83::create();

        return Factory::fromRuleSet($ruleSet, [
            'native_function_invocation' => false,
            'native_constant_invocation' => false,
            'mb_str_functions' => false,
            'final_class' => false,
            'final_public_method_for_abstract_class' => false,
        ]);
    }
}
