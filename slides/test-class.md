<h3>Test class</h3>
          <pre><code class="hljs">
namespace Drupal\Tests\one_two\Unit;

/**
 * @coversDefaultClass \Drupal\user\UserAuth
 */
class MockingTest extends UnitTestCase {

  /**
   * @covers ::authenticate
   * @dataProvider authenticationProvider
   */
  public function testAuthenticate($user_id, $username, $password, $correct_password, $expected) {
    $user_auth = new UserAuth($this-&gt;entityManager-&gt;reveal(), $this-&gt;passwordChecker-&gt;reveal());
    $this-&gt;assertEquals($expected, $user_auth-&gt;authenticate($username, $password));
  }

}
          </code></pre>
        