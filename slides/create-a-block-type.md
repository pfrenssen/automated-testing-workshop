### Create a block type

    class KernelTest extends KernelTestBase {
    
      /**
       * Tests creation of custom blocks.
       */
      public function testBlockCreation() {
        // Create a block entity type.
        $bundle = Unicode::strtolower($this->randomMachineName());
        BlockContentType::create([
          'id' => $bundle,
          'label' => $this->randomString(),
        ])->save();
      }
    
    }
