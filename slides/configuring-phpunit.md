## Configuring PHPUnit

`web/phpunit.xml`

```
<phpunit>
  <php>
    <env name="SIMPLETEST_BASE_URL" value="http://myproject.local"/>
    <env name="SIMPLETEST_DB" value="mysql://root:password@127.0.0.1:3306/dbname"/>
    <env name="BROWSERTEST_OUTPUT_DIRECTORY" value="/path/to/project/web/sites/simpletest/browser_output"/>
    <env name="BROWSERTEST_OUTPUT_FILE" value="/path/to/project/web/sites/simpletest/browser_output/outputfile.txt"/>
  </php>
</phpunit>
```
