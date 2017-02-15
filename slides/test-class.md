### Test class

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
        $user_auth = new UserAuth($this->entityManager->reveal(), $this->passwordChecker->reveal());
        $this->assertEquals($expected, $user_auth->authenticate($username, $password));
      }
    
    }
