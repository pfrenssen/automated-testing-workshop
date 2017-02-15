<h2>Configure project</h2>
          <p>build.properties.local</p>
          <pre class="hljs"><div>
    # The location of the Composer binary.
    composer.bin = /usr/bin/composer

    # Database settings.
    drupal.db.name = drupalproject
    drupal.db.user = root
    drupal.db.password = tp5VBzRj

    # Admin user.
    drupal.admin.username = admin
    drupal.admin.password = admin

    # The base URL to use in Behat tests.
    behat.base_url = http://drupal-project.local
          </div></pre>
          <p>Check `build.properties` for all available options.</p>
        