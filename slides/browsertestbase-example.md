<h3>BrowserTestBase</h3>
          <p>tests/src/Functional/BrowserTest.php</p>
          <pre><code class="hljs">
  &lt;?php
  namespace Drupal\Tests\one_two\Functional;

  use Drupal\Tests\BrowserTestBase;

  /**
   * Example functional test.
   *
   * @group one_two
   */
  class BrowserTest extends BrowserTestBase {
    function testDrupalGet() {
      $this-&gt;drupalGet('user/register');
      $this-&gt;assertSession()-&gt;pageTextContains('Create new account');
    }
  }
          </code></pre>
          <p>Test function names start with 'test'</p>
        