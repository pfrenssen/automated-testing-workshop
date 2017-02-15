### Install schemas

    class KernelTest extends KernelTestBase {
    
      public static $modules = ['system', 'block', 'block_content', 'user'];
    
      protected $entityTypeManager;
    
      public function setUp() {
        parent::setUp();
        $this->installEntitySchema('block_content');
        $this->installEntitySchema('user');
    
        $this->entityTypeManager = $this->container->get('entity_type.manager');
      }
    
    }
