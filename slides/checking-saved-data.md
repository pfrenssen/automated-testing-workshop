### Checking saved data

    function testNodeCreate() {
      ...
  
      $node = $this->drupalGetNodeByTitle($title);
      $this->assertTrue($node);
      $this->assertEquals($title, $node->getTitle());
      $this->assertEquals($body, $node->body->value);
    }
