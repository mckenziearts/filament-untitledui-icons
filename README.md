<p align="center">
    <img src="art/screenshot.jpg" style="width: 100%; max-width: 800px;" alt="Untitled UI Icons 1,000+ icons">
</p>

# Filament Untitledui Icons

A Untitledui icon set implementation for [Filament Icons](https://github.com/filafly/filament-icons), allowing for instant replacement of all icons used within the Filament framework.

## Installation

You can install the package via composer:

```bash
composer require mckenziearts/filament-untitledui-icons
```

After the package is installed, you must register the plugin in your Filament Panel provider:

```php
use Mckenziearts\Icons\Untitledui\UntitleduiIcons;

public function panel(Panel $panel): Panel
{
    return $panel
        ->plugin(UntitleduiIcons::make());
}
```

## Setting the global icon style

Untitledui icons come in multiple styles that you can switch between. Available styles include:

- Regular (default)

You can change the style using the following methods:

```php
UntitleduiIcons::make()->regular();
```

## Setting style for a subset of icons

If you need to override certain icons to use a different style, you can use either icon aliases or icon enum cases.

### Using icon aliases
Use the `overrideStyleForAlias` method with a [Filament Icon Alias](https://filamentphp.com/docs/4.x/styling/icons#available-icon-aliases). This method works with either a single icon key (string) or multiple icon keys (array).

```php
use Mckenziearts\Icons\Untitledui\UntitleduiIcons;
use Mckenziearts\Icons\Untitledui\Enums\UntitleduiStyle;
use Filament\Tables\View\TablesIconAlias;
use Filament\Actions\View\ActionsIconAlias;

// Override a single icon key
UntitleduiIcons::make()->overrideStyleForAlias(TablesIconAlias::ACTIONS_FILTER, UntitleduiStyle::Regular);

// Override multiple icon keys at once
UntitleduiIcons::make()->overrideStyleForAliases([
    ActionsIconAlias::MODAL_CLOSE_BUTTON => UntitleduiStyle::Regular,
]);
```

### Using icon enum cases
Use the `overrideStyleForIcon` method with a Untitledui icon enum case:

```php
use Mckenziearts\Icons\Untitledui\UntitleduiIcons;
use Mckenziearts\Icons\Untitledui\Enums\Untitledui;
use Mckenziearts\Icons\Untitledui\Enums\UntitleduiStyle;

// Override a specific icon
UntitleduiIcons::make()->overrideStyleForIcon(Untitledui::Check, UntitleduiStyle::Bold);

// Override multiple icons at once
UntitleduiIcons::make()->overrideStyleForIcons([
    Untitledui::ArrowRight => UntitleduiStyle::Regular,
]);
```

## Overriding individual icons

You can change which icon is used for any given Filament alias:

### Using icon aliases
```php
use Mckenziearts\Icons\Untitledui\UntitleduiIcons;
use Mckenziearts\Icons\Untitledui\Enums\Untitledui;
use Filament\Tables\View\TablesIconAlias;
use Filament\Actions\View\ActionsIconAlias;

// Override a single alias
UntitleduiIcons::make()->overrideAlias(TablesIconAlias::ACTIONS_FILTER, Untitledui::FunnelSimple);

// Override multiple aliases at once
UntitleduiIcons::make()->overrideAliases([
    TablesIconAlias::ACTIONS_FILTER => Untitledui::FunnelSimple,
    ActionsIconAlias::BUTTON_GROUP_DROPDOWN_INDICATOR => Untitledui::CaretUpDown,
]);
```

### Using icon enum cases
```php
use Mckenziearts\Icons\Untitledui\UntitleduiIcons;
use Mckenziearts\Icons\Untitledui\Enums\Untitledui;

// Replace every instance of one icon with another
UntitleduiIcons::make()->overrideIcon(Untitledui::User, Untitledui::UserCircle);

// Replace multiple icons at once
UntitleduiIcons::make()->overrideIcons([
    Untitledui::User => Untitledui::UserCircle,
    Untitledui::Heart => Untitledui::HeartFilled,
]);
```

## Credits

- [Untitledui](https://example.com) for the icon library
- [Filament Icons](https://github.com/filafly/filament-icons) for the base icon system

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.