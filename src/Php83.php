<?php

declare(strict_types=1);

namespace Brixion\CsfixerConfig;

use Ergebnis\PhpCsFixer\Config\Factory;
use Ergebnis\PhpCsFixer\Config\Rules;
use Ergebnis\PhpCsFixer\Config\RuleSet\Php83 as rulesetPhp83;
use PhpCsFixer\Config;

class Php83
{
    public static function getConfig(): Config
    {
        $ruleSet = rulesetPhp83::create()->withRules(Rules::fromArray(
            [
                'final_public_method_for_abstract_class' => false,
                'native_function_invocation' => false,
                'native_constant_invocation' => false,
                'yoda_style' => [
                    'always_move_variable' => true,
                    'equal' => false,
                    'identical' => false,
                    'less_and_greater' => false,
                ],
                'class_attributes_separation' => [
                    'elements' => [
                        'const' => 'one',
                        'method' => 'one',
                        'property' => 'one',
                    ],
                ],
            ]
        ));

        return Factory::fromRuleSet($ruleSet);
    }
}
