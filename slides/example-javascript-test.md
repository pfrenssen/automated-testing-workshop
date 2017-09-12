### Example JavaScript test

```
class ToolbarIntegrationTest extends JavascriptTestBase {

  protected static $modules = ['toolbar', 'node'];

  protected $adminUser;

  protected function setUp() {
    parent::setUp();

    $this->adminUser = $this->drupalCreateUser([
      'access toolbar',
      'administer site configuration',
      'access content overview',
    ]);
  }

}
```
