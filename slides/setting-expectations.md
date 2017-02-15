### Setting expectations

    public function testAuthenticate($user_id, $username, $password, $correct_password, $expected) {
      $this->entityManager->getStorage('user')
        ->willReturn($this->entityStorage->reveal());
  
      $this->entityStorage->loadByProperties(['name' => $username])
        ->willReturn([$this->user->reveal()]);
  
      $this->user->getPassword()
        ->willReturn($correct_password);
  
      $this->user->id()
      ->willReturn($user_id);

    // ...
  }
