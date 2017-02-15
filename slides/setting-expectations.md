<h3>Setting expectations</h3>
          <pre><code class="hljs">
  public function testAuthenticate($user_id, $username, $password, $correct_password, $expected) {
    $this-&gt;entityManager-&gt;getStorage('user')
      -&gt;willReturn($this-&gt;entityStorage-&gt;reveal());

    $this-&gt;entityStorage-&gt;loadByProperties(['name' =&gt; $username])
      -&gt;willReturn([$this-&gt;user-&gt;reveal()]);

    $this-&gt;user-&gt;getPassword()
      -&gt;willReturn($correct_password);

    $this-&gt;user-&gt;id()
      -&gt;willReturn($user_id);

    // ...
  }
          </code></pre>
        