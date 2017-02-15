### Mocking dependencies

    /**
     * @var \Drupal\Core\Entity\EntityManagerInterface|\Prophecy\Prophecy\ObjectProphecy
     */
    protected $entityManager;
    
    /**
     * @var \Drupal\Core\Password\PasswordInterface|\Prophecy\Prophecy\ObjectProphecy
     */
    protected $passwordChecker;
    
    /**
     * @var \Drupal\Core\Entity\EntityStorageInterface|\Prophecy\Prophecy\ObjectProphecy
     */
    protected $entityStorage;
    
    /**
     * @var \Drupal\user\UserInterface|\Prophecy\Prophecy\ObjectProphecy
     */
    protected $user;
    
    public function setUp() {
      parent::setUp();
    
      $this->entityManager = $this->prophesize(EntityManagerInterface::class);
      $this->passwordChecker = $this->prophesize(PasswordInterface::class);
      $this->entityStorage = $this->prophesize(EntityStorageInterface::class);
      $this->user = $this->prophesize(UserInterface::class);
    }
