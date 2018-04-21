# Macro

:wrench: Latte macro for fontawesome

![Packagist](https://img.shields.io/packagist/dt/nepttune/macro.svg)
![Packagist](https://img.shields.io/packagist/v/nepttune/macro.svg)
[![CommitsSinceTag](https://img.shields.io/github/commits-since/nepttune/macro/v1.0.1.svg?maxAge=600)]()

[![Code Climate](https://codeclimate.com/github/nepttune/macro/badges/gpa.svg)](https://codeclimate.com/github/nepttune/macro)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/nepttune/macro/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/nepttune/macro/?branch=master)

## Introduction

This package contains set of useful Latte macros.
- `{icon}` which renders as font awesome 5 icon.
- `{iconFA4}` which renders as font awesome 4 icon.

## Depenencies

- [nepttune/base-requirements](https://github.com/nepttune/base-requirements)

## How to use

- Register `\Nepttune\Latte\IconMacro` as macro in cofiguration file.
- Use icon macro in latte templates. `{icon user}` renders as font awesome user icon.
  - FA5 divided icons into packges of different types (solid, regular, light, brand). Specify desired type with parameter `type` (`s`, `r`, `l`, `b`), default is `s` as solid. `{icon facebook, type => 'b'}`
  - Icons are fixed width by default, you can disable it by passing `fw` parater with `false` value.

### Example configuration

```
latte:
    macros:
      - Nepttune\Latte\IconMacro::install
```
