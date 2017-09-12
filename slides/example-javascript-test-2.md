### Example JavaScript test

```
class ToolbarIntegrationTest extends JavascriptTestBase {

  public function testToolbarToggling() {
    $this->drupalLogin($this->adminUser);
    $this->drupalGet('<front>');

    $tray = $page->findById('toolbar-item-administration-tray');
    $this->assertFalse($tray->hasClass('toolbar-tray-vertical'));
    $page->pressButton('Vertical orientation');
    $this->assertTrue($tray->hasClass('toolbar-tray-vertical'));

    $page->pressButton('Horizontal orientation');
    $this->assertTrue($tray->hasClass('toolbar-tray-horizontal'));
  }

}
```
