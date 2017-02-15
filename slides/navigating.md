### Navigating

    function testNodeCreate() {
      ...
  
      $this->clickLink(t('Edit'));
      $this->assertSession()->addressEquals($node->toUrl('edit-form', ['absolute' => TRUE]));
  
      $link_text = 'Edit<span class="visually-hidden">(active tab)</span>';
      $this->assertSession()->responseContains($link_text);
    }
