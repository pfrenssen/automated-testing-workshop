<h3>Mocking dependencies</h3>
          <pre><code class="hljs">
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

    $this-&gt;entityManager = $this-&gt;prophesize(EntityManagerInterface::class);
    $this-&gt;passwordChecker = $this-&gt;prophesize(PasswordInterface::class);
    $this-&gt;entityStorage = $this-&gt;prophesize(EntityStorageInterface::class);
    $this-&gt;user = $this-&gt;prophesize(UserInterface::class);
  }
          </code></pre>
        