### The code we're going to test

    public function authenticate($username, $password) {
      $uid = FALSE;
      if (!empty($username) && strlen($password) > 0) {
        $account_search = $this->entityManager->getStorage('user')->loadByProperties(array('name' => $username));
        if ($account = reset($account_search)) {
          if ($this->passwordChecker->check($password, $account->getPassword())) {
            $uid = $account->id();
  
            if ($this->passwordChecker->needsRehash($account->getPassword())) {
              $account->setPassword($password);
              $account->save();
            }
          }
        }
      }
      return $uid;
    }
