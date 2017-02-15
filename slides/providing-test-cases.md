<h3>Providing test cases</h3>
          <pre><code class="hljs">
  public function authenticationProvider() {
    return [
      // A correct user name and password.
      [
        1,
        'admin',
        'hunter2',
        'hunter2',
        1,
      ],
      // Incorrect password, should return FALSE.
      [
        1,
        'admin',
        'pass',
        'hunter2',
        FALSE,
      ],
  }
          </code></pre>
        