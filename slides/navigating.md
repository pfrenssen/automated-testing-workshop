<h3>Navigating</h3>
          <pre><code class="hljs">
  function testNodeCreate() {
    ...

    $this-&gt;clickLink(t('Edit'));
    $this-&gt;assertSession()-&gt;addressEquals($node-&gt;toUrl('edit-form', ['absolute' =&gt; TRUE]));

    $link_text = 'Edit<span class="visually-hidden">(active tab)</span>';
    $this-&gt;assertSession()-&gt;responseContains($link_text);
  }
          </code></pre>
        