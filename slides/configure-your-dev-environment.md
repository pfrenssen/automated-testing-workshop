<h2>Configure your dev environment</h2>
          <p>build.properties.local</p>
          <pre class="hljs"><div>
    # Database settings.
    drupal.db.name = vrt-demo
    drupal.db.user = root
    drupal.db.password = hunter2

    # The base URL. Used for functional tests.
    drupal.base_url = http://vrt-demo.local
          </div></pre>
          <p>Create the 'build.properties.local' file</p>
          <p>Contains personal settings for local dev - don't commit!</p>
          <p>Check 'build.properties.dist' for more options</p>
        