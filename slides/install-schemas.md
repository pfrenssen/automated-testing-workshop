<h3>Install schemas</h3>
          <pre><code class="hljs">
  class KernelTest extends KernelTestBase {

    public static $modules = ['system', 'block', 'block_content', 'user'];

    protected $entityTypeManager;

    public function setUp() {
      parent::setUp();
      $this-&gt;installEntitySchema('block_content');
      $this-&gt;installEntitySchema('user');

      $this-&gt;entityTypeManager = $this-&gt;container-&gt;get('entity_type.manager');
    }

  }
          </code></pre>
        