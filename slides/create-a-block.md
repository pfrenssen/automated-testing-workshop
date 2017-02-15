<h3>Create a block</h3>
          <pre><code class="hljs">
    class KernelTest extends KernelTestBase {

      public function testBlockCreation() {
        // ...

        // Create a block.
        $info = $this-&gt;randomMachineName();
        $block = BlockContent::create([
          'info' =&gt; $info,
          'type' =&gt; $bundle,
        ]);
        $block-&gt;save();
      }

    }
          </code></pre>
        