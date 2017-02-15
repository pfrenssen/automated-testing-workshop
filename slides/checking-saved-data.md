<h3>Checking saved data</h3>
          <pre><code class="hljs">
  function testNodeCreate() {
    ...

    $node = $this-&gt;drupalGetNodeByTitle($title);
    $this-&gt;assertTrue($node);
    $this-&gt;assertEquals($title, $node-&gt;getTitle());
    $this-&gt;assertEquals($body, $node-&gt;body-&gt;value);
  }
          </code></pre>
        