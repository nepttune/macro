# Macro

:wrench: Latte macro for fontawesome

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
