### Setting more expectations

    public function testAuthenticate($user_id, $username, $password, $correct_password, $expected) {
      $this->passwordChecker->check($password, $correct_password)
        ->willReturn($password === $correct_password);
  
      // We're not testing the password rehashing here.
      $this->passwordChecker->needsRehash($password)
        ->willReturn(FALSE);
  
      if (empty($username) || empty($password)) {
        $this->entityStorage->loadByProperties(['name' => $username])
          ->shouldNotBeCalled();
      }

      // ...
    }
