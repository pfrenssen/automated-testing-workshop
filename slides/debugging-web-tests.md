### Debugging Web Tests

    function testNodeCreate() {
      ...
    
      var_dump($node->body->value);
      var_dump($title);
    }

Note: You'll see the output, but the test will fail
