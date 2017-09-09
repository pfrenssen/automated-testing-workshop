## Configuring Behat

`tests/behat.yml`

```
default:
  suites:
    default:
      contexts:
        - FeatureContext
        - Drupal\DrupalExtension\Context\DrupalContext
        - Drupal\DrupalExtension\Context\MinkContext
  extensions:
    Behat\MinkExtension:
      base-url: 'http://myproject.local'
      goutte: ~
    Drupal\DrupalExtension:
      api_driver: 'drupal'
      blackbox: ~
      drupal:
        drupal_root: '/path/to/drupal-project/web'
```
