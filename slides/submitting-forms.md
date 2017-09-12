### Submitting forms

    public function testNodeCreate() {
      $this->drupalLogin($this->user);
    
      $title = $this->randomString();
      $body = $this->randomString(32);
      $edit = [
        'Title' => $title,
        'Body' => $body,
      ];
      $this->drupalPostForm('node/add/page', $edit, t('Save'));
    }
