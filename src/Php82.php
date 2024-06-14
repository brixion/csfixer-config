<?php

declare(strict_types=1);

namespace Brixion\CsfixerConfig;

use Ergebnis\PhpCsFixer\Config\Factory;
use Ergebnis\PhpCsFixer\Config\Rules;
use Ergebnis\PhpCsFixer\Config\RuleSet\Php82 as rulesetPhp82;
use PhpCsFixer\Config;

class Php82
{
    public static function getConfig(): Config
    {
        $ruleSet = rulesetPhp82::create()->withRules(Rules::fromArray(
            [
                'native_function_invocation' => false,
                'native_constant_invocation' => false,
                'mb_str_functions' => false,
                'final_class' => false,
                'final_public_method_for_abstract_class' => false,
                'yoda_style' => [
                    'always_move_variable' => true,
                    'equal' => false,
                    'identical' => false,
                    'less_and_greater' => false,
                ]
            ]
        ));

        return Factory::fromRuleSet($ruleSet);
    }
}
