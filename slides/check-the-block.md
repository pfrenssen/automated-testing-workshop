<h3>Check the block</h3>
          <pre><code class="hljs">
  class KernelTest extends KernelTestBase {

    public function testBlockCreation() {
      // ...

      // Load the block from storage and check if the values were saved correctly.
      $this-&gt;entityTypeManager-&gt;getStorage('block_content')-&gt;loadUnchanged($block-&gt;id());
      $this-&gt;assertEquals($info, $block-&gt;label());
      $this-&gt;assertEquals($bundle, $block-&gt;bundle());
    }

  }
          </code></pre>
        