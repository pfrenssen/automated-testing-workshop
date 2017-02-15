<h3>Submitting forms</h3>
          <pre><code class="hljs">
  function testNodeCreate() {
    $this-&gt;drupalLogin($this-&gt;user);

    $title = $this-&gt;randomString();
    $body = $this-&gt;randomString(32);
    $edit = [
      'Title' =&gt; $title,
      'Body' =&gt; $body,
    ];
    $this-&gt;drupalPostForm('node/add/page', $edit, t('Save'));
  }
          </code></pre>
        