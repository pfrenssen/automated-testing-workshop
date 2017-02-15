<h3>Test setUp()</h3>
          <pre><code class="hljs">
class BrowserTest extends BrowserTestBase {

  protected $user;

  public static $modules = ['block', 'node', 'datetime'];

  protected function setUp() {
    parent::setUp();

    $this-&gt;drupalCreateContentType(['type' =&gt; 'page', 'name' =&gt; 'Basic page']);
    $this-&gt;user = $this-&gt;drupalCreateUser(['edit own page content', 'create page content']);
    $this-&gt;drupalPlaceBlock('local_tasks_block');
  }

}
          </code></pre>
        