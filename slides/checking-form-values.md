<h3>Checking form values</h3>
          <pre><code class="hljs">
  function testNodeCreate() {
    ...

    $this-&gt;assertSession()-&gt;fieldValueEquals('Title', $title);
    $this-&gt;assertSession()-&gt;fieldValueEquals('Body', $body);
  }
          </code></pre>
        