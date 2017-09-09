## Configuring Selenium

`tests/behat.yml`

```
default:
  extensions:
    Behat\MinkExtension:
      javascript_session: 'selenium2'
      browser_name: 'chrome'
      selenium2:
        wd_host: 'http://localhost:4444/wd/hub'
```
