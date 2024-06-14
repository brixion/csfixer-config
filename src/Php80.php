<?php

declare(strict_types=1);

namespace Brixion\CsfixerConfig;

use Ergebnis\PhpCsFixer\Config\Factory;
use Ergebnis\PhpCsFixer\Config\RuleSet\Php80 as rulesetPhp80;
use PhpCsFixer\Config;

class Php80
{
    public static function getConfig(): Config
    {
        $ruleSet = rulesetPhp80::create();

        return Factory::fromRuleSet($ruleSet, [
            'native_function_invocation' => false,
            'native_constant_invocation' => false,
            'mb_str_functions' => false,
            'final_class' => false,
            'modernize_types_casting' => false,
            'final_public_method_for_abstract_class' => false,
            'class_attributes_separation' => [
                'elements' => [
                    'const' => 'one',
                    'property' => 'one',
                ],
            ],
            'yoda_style' => [
                'always_move_variable' => true,
                'equal' => false,
                'identical' => false,
                'less_and_greater' => false,
            ],
        ]);
    }
}
