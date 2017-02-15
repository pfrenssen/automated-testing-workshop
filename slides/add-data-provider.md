<h3>Add data provider</h3>
          <pre><code class="hljs">
class UnitTest extends UnitTestCase {
  public function providerTestValidAbsoluteData() {
    return [
      ['http://example.com'],
      ['https://www.example.com'],
      ['http://ex-ample.com'],
      ['https://3xampl3.com'],
      ['http://example.com:8080'],
      ['https://subdomain.example.com'],
      ['http://example.com/index.php/node?param=false'],
      ['https://user:pass@www.example.com:8080/login.php?do=login&amp;style=%23#pagetop'],
      ['http://127.0.0.1'],
      ['http://john%20doe:secret:foo@example.org/'],
      ['https://[FEDC:BA98:7654:3210:FEDC:BA98:7654:3210]:80/index.html'],
    ];
  }

}
          </code></pre>
        