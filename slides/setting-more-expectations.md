<h3>Setting more expectations</h3>
          <pre><code class="hljs">
  public function testAuthenticate($user_id, $username, $password, $correct_password, $expected) {
    $this-&gt;passwordChecker-&gt;check($password, $correct_password)
      -&gt;willReturn($password === $correct_password);

    // We're not testing the password rehashing here.
    $this-&gt;passwordChecker-&gt;needsRehash($password)
      -&gt;willReturn(FALSE);

    if (empty($username) || empty($password)) {
      $this-&gt;entityStorage-&gt;loadByProperties(['name' =&gt; $username])
        -&gt;shouldNotBeCalled();
    }

    // ...
}
          </code></pre>
        