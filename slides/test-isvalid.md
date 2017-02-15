<h3>Test isValid()</h3>
          <pre><code class="hljs">
class UnitTest extends UnitTestCase {

  /**
   * Tests valid absolute URLs.
   *
   * @dataProvider providerTestValidAbsoluteData
   * @covers ::isValid
   */
  public function testValidAbsoluteUrl($url) {
    $valid_url = UrlHelper::isValid($url, TRUE);
    $this-&gt;assertTrue($valid_url, $url . ' is a valid URL.');
  }

}
          </code></pre>
        