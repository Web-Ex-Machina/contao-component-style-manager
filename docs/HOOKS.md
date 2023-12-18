# Hooks:

## ComponentStyleSelect Widget:

### styleManagerWidgetComponentStyleSelectGetStyleManagerArchiveModelCollection

Called when generating ComponentStyleSelect widget

**Return value** : `\Oveleon\ContaoComponentStyleManager\StyleManagerArchiveModel|null`

**Arguments**:
Name | Type | Description
--- | --- | ---
$styleArchiveCollection | `\Oveleon\ContaoComponentStyleManager\StyleManagerArchiveModel|null` | The default archive
$widget | `\Oveleon\ContaoComponentStyleManager\ComponentStyleSelect` | The widget

**Code**:
```php
public function __invoke(
	?\Oveleon\ContaoComponentStyleManager\StyleManagerArchiveModel $styleArchiveCollection,
	\Oveleon\ContaoComponentStyleManager\ComponentStyleSelect $widget
): ?\Oveleon\ContaoComponentStyleManager\StyleManagerArchiveModel
{
    return $styleArchiveCollection;
}
```

### styleManagerWidgetComponentStyleSelectGetStyleManagerModelCollection

Called when generating ComponentStyleSelect widget

**Return value** : `\Oveleon\ContaoComponentStyleManager\StyleManagerModel|null`

**Arguments**:
Name | Type | Description
--- | --- | ---
$styleCollection | `\Oveleon\ContaoComponentStyleManager\StyleManagerModel|null` | The default archive
$widget | `\Oveleon\ContaoComponentStyleManager\ComponentStyleSelect` | The widget

**Code**:
```php
public function __invoke(
	?\Oveleon\ContaoComponentStyleManager\StyleManagerModel $styleCollection,
	\Oveleon\ContaoComponentStyleManager\ComponentStyleSelect $widget
): ?\Oveleon\ContaoComponentStyleManager\StyleManagerModel
{
    return $styleCollection;
}
