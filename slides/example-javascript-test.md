### Example JavaScript test

    class ToolbarIntegrationTest extends JavascriptTestBase {
    
      public function testToolbarToggling() {
        $this->drupalLogin($admin_user);
        $this->drupalGet('<front>');
    
        // Test that it is possible to toggle the toolbar tray.
        $this->assertElementVisible('#toolbar-link-system-admin_content', 'Toolbar tray is open by default.');
        $this->click('#toolbar-item-administration');
        $this->assertElementNotVisible('#toolbar-link-system-admin_content', 'Toolbar tray is closed after clicking the "Manage" button.');
        $this->click('#toolbar-item-administration');
        $this->assertElementVisible('#toolbar-link-system-admin_content', 'Toolbar tray is visible again after clicking the "Manage" button a second time.');
      }
    
    }
