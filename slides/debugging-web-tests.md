<h3>Debugging Web Tests</h3>
          <pre><code class="hljs">
  function testNodeCreate() {
    ...

    var_dump($node-&gt;body-&gt;value);
    var_dump($title);
  }
          </code></pre>
          <p>Note: You'll see the output, but the test will fail</p>
        