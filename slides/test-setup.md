### Test setUp()

    class BrowserTest extends BrowserTestBase {
    
      protected $user;
    
      public static $modules = ['block', 'node', 'datetime'];
    
      protected function setUp() {
        parent::setUp();
    
        $this->drupalCreateContentType(['type' => 'page', 'name' => 'Basic page']);
        $this->user = $this->drupalCreateUser(['edit own page content', 'create page content']);
        $this->drupalPlaceBlock('local_tasks_block');
      }
    
    }
