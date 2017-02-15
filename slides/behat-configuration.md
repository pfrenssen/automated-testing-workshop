<h3>Behat configuration</h3>
          <p>tests/behat.yml</p>
          <pre><div class="hljs">
default:
  suites:
    default:
      contexts:
        - FeatureContext
        - Drupal\DrupalExtension\Context\DrupalContext
        - Drupal\DrupalExtension\Context\DrushContext
        - Drupal\DrupalExtension\Context\MessageContext
        - Drupal\DrupalExtension\Context\MinkContext
      filters:
        tags: "~@wip"
  extensions:
    Behat\MinkExtension:
      base-url: 'http://drupal-project.local'
      files_path: '/home/pieter/drupal-project/tests/fixtures/files'
      goutte: ~
      javascript_session: 'selenium2'
      selenium2: ~
    Drupal\DrupalExtension:
      api_driver: 'drupal'
      blackbox: ~
      drupal:
        drupal_root: '/home/pieter/drupal-project/web'
      selectors:
        message_selector: '.messages'
        error_message_selector: '.messages.messages--error'
        success_message_selector: '.messages.messages--status'
      subcontexts:
        paths:
          - '/home/pieter/drupal-project/web/modules'
  formatters:
    progress: ~
          </div></pre>
        