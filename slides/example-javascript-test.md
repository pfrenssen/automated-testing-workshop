<h3>Example JavaScript test</h3>
          <pre><code class="hljs">
class ToolbarIntegrationTest extends JavascriptTestBase {

  public function testToolbarToggling() {
    $this-&gt;drupalLogin($admin_user);
    $this-&gt;drupalGet('&lt;front&gt;');

    // Test that it is possible to toggle the toolbar tray.
    $this-&gt;assertElementVisible('#toolbar-link-system-admin_content', 'Toolbar tray is open by default.');
    $this-&gt;click('#toolbar-item-administration');
    $this-&gt;assertElementNotVisible('#toolbar-link-system-admin_content', 'Toolbar tray is closed after clicking the "Manage" button.');
    $this-&gt;click('#toolbar-item-administration');
    $this-&gt;assertElementVisible('#toolbar-link-system-admin_content', 'Toolbar tray is visible again after clicking the "Manage" button a second time.');
  }

}
          </code></pre>
        