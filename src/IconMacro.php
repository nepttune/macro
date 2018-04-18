<?php

/**
 * This file is part of Nepttune (https://www.peldax.com)
 *
 * Copyright (c) 2018 Václav Pelíšek (info@peldax.com)
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license. For more information, see
 * <https://www.peldax.com>.
 */

declare(strict_types = 1);

namespace Nepttune\Latte;

final class IconMacro extends \Latte\Macros\MacroSet
{
    public static function install(\Latte\Compiler $compiler)
    {
        $set = new static($compiler);
        $set->addMacro('icon', function($node, $writer)
        {
            return $writer->write('echo \Nepttune\Latte\IconMacro::renderIcon(%node.word, %node.array)');
        });
        $set->addMacro('iconFA4', function($node, $writer)
        {
            return $writer->write('echo \Nepttune\Latte\IconMacro::renderIconFA4(%node.word, %node.array)');
        });
    }

    public static function renderIcon($icon, array $params = [])
    {
        $el = \Nette\Utils\Html::el('i');

        $type = $params['type'] ?? 's';
        $fw = $params['fw'] ?? true;

        $el->addAttributes(['class' => "fa{$type} fa-{$icon}"]);

        if ($fw)
        {
            $el->appendAttribute('class', 'fa-fw');
        }

        if (isset($params['size']))
        {
            $el->appendAttribute('class', 'fa-'.$params['size']);
        }

        return $el;
    }

    public static function renderIconFA4($icon, array $params = [])
    {
        $el = \Nette\Utils\Html::el('i');
        $el->addAttributes(['class' => 'fa fa-'.$icon]);

        $fw = $params['fw'] ?? true;

        if ($fw)
        {
            $el->appendAttribute('class', 'fa-fw');
        }

        if (isset($params['size']))
        {
            $el->appendAttribute('class', 'fa-'.$params['size']);
        }

        return $el;
    }
}
