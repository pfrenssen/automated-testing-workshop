### Checking form values

    function testNodeCreate() {
      ...
    
      $this->assertSession()->fieldValueEquals('Title', $title);
      $this->assertSession()->fieldValueEquals('Body', $body);
    }
