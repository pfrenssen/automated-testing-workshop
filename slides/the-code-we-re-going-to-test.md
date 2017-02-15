<h3>The code we're going to test</h3>
          <pre><code class="hljs">
  public function authenticate($username, $password) {
    $uid = FALSE;
    if (!empty($username) &amp;&amp; strlen($password) &gt; 0) {
      $account_search = $this-&gt;entityManager-&gt;getStorage('user')-&gt;loadByProperties(array('name' =&gt; $username));
      if ($account = reset($account_search)) {
        if ($this-&gt;passwordChecker-&gt;check($password, $account-&gt;getPassword())) {
          $uid = $account-&gt;id();

          if ($this-&gt;passwordChecker-&gt;needsRehash($account-&gt;getPassword())) {
            $account-&gt;setPassword($password);
            $account-&gt;save();
          }
        }
      }
    }
    return $uid;
  }
          </code></pre>
        