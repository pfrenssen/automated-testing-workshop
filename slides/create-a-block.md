### Create a block

    class KernelTest extends KernelTestBase {
    
      public function testBlockCreation() {
        // ...
    
        // Create a block.
        $info = $this->randomMachineName();
        $block = BlockContent::create([
          'info' => $info,
          'type' => $bundle,
        ]);
        $block->save();
      }
    
    }
