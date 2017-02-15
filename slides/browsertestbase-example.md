### BrowserTestBase

tests/src/Functional/BrowserTest.php

    <?php
    namespace Drupal\Tests\one_two\Functional;
    
    use Drupal\Tests\BrowserTestBase;
    
    /**
     * Example functional test.
     *
     * @group one_two
     */
    class BrowserTest extends BrowserTestBase {
      function testDrupalGet() {
        $this->drupalGet('user/register');
        $this->assertSession()->pageTextContains('Create new account');
      }
    }
    
Test function names start with 'test'
