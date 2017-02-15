### A few more test cases
          <pre><code class="hljs">
  public function authenticationProvider() {
    return [
      // ...

      // Missing username, should return FALSE.
      [
        1,
        '',
        'hunter2',
        'hunter2',
        FALSE,
      ],
      // Missing password, should return FALSE.
      [
        1,
        'Donald Trump',
        '',
        'hunter2',
        FALSE,
      ],
    ];
  }
          </code></pre>
