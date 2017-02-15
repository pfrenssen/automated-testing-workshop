<h3>Create a block type</h3>
          <pre><code class="hljs">
    class KernelTest extends KernelTestBase {

      /**
       * Tests creation of custom blocks.
       */
      public function testBlockCreation() {
        // Create a block entity type.
        $bundle = Unicode::strtolower($this-&gt;randomMachineName());
        BlockContentType::create([
          'id' =&gt; $bundle,
          'label' =&gt; $this-&gt;randomString(),
        ])-&gt;save();
      }

    }
          </code></pre>
        