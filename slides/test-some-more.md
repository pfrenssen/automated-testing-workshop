<h3>Test some more</h3>
          <pre><code class="hljs">
  function testDrupalGet() {
    $this-&gt;drupalGet('user/register');
    $this-&gt;assertSession()-&gt;pageTextContains('Create new account');
    $this-&gt;assertSession()-&gt;fieldExists('Email address');
    $this-&gt;assertSession()-&gt;fieldExists('Username');
    $this-&gt;assertSession()-&gt;buttonExists('Create new account');
    $this-&gt;assertSession()-&gt;pageTextNotContains('vtm nieuws');
  }
          </code></pre>
          <p>Take a look at the available asserts.</p>
        