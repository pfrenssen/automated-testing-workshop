### Check the block

    class KernelTest extends KernelTestBase {
    
      public function testBlockCreation() {
        // ...
    
        // Load the block from storage and check if the values were saved correctly.
        $block = $this->entityTypeManager->getStorage('block_content')->loadUnchanged($block->id());
        $this->assertEquals($info, $block->label());
        $this->assertEquals($bundle, $block->bundle());
      }
    
    }
