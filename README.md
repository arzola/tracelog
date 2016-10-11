# Tracelog Plugin

History changelog for eloquent models in October CMS.

## Description

This plugin is a single Trait to append to your Eloquent models in OctoberCMS to be able to trace modifications on a changelog

### Usage

Implement the [LastEdit](https://github.com/arzola/tracelog/blob/master/icodemx/tracelog/classes/LastEdited.php) *[Trait](https://secure.php.net/manual/en/language.oop5.traits.php)* in your model to be tracked.

```php
use Icodemx\Tracelog\Classes\LastEdit;
```

For example
```php
namespace Acme\Foo\Models;
use Icodemx\Tracelog\Classes\LastEdit;

class MyModel extends Model
{
    use LastEdit;
}
```
And that's it.

Your model now will be tracked

### Extra options
```php
/*
 *
 * Set this variable if you want to override the default "Updated/Deleted" msg
 *
 */

public $message;

/*
 *
 * Set this variable you want to save some column of your model
 * on the tracelog table
 *
 */
    
public $referenceLog;
```
