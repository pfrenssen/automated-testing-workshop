## Using the overridden context

`behat.yml`

```
default:
  suites:
    default:
      contexts:
        - Drupal\my_project\Context\DrupalContext
```

`composer.json`

```
{
    "autoload": {
        "psr-4": {
            "Drupal\\my_project\\": "tests/src",
        }
    }
}
```
