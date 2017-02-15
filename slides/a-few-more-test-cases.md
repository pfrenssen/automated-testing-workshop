### A few more test cases

    public function authenticationProvider() {
      return [
        // ...
    
        // Missing username, should return FALSE.
        [
          1,
          '',
          'hunter2',
          'hunter2',
          FALSE,
        ],
        // Missing password, should return FALSE.
        [
          1,
          'Donald Trump',
          '',
          'hunter2',
          FALSE,
        ],
      ];
    }
