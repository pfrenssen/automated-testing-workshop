<h3>Run tests with code coverage</h3>
          <pre><code class="hljs">
    $ export SIMPLETEST_BASE_URL=http://mysite.local/
    $ export SIMPLETEST_DB=mysql://user:pass@localhost/dbname

    $ ../vendor/bin/phpunit \
      -c ./core/phpunit.xml.dist \
      --coverage-xml=result.xml \
      modules/one_two
          </code></pre>
        