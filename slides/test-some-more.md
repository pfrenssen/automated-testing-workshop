### Test some more

    function testDrupalGet() {
      $this->drupalGet('user/register');
      $this->assertSession()->pageTextContains('Create new account');
      $this->assertSession()->fieldExists('Email address');
      $this->assertSession()->fieldExists('Username');
      $this->assertSession()->buttonExists('Create new account');
      $this->assertSession()->pageTextNotContains('Joomla');
    }

Take a look at the available asserts.
