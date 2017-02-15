## Run the test

    $ ./behat
    
    @api
    Scenario: Anonymous user can see the news overview
      Given "News article" content:
        | title     | body                |
        | Article 1 | The first article.  |
        | Article 2 | The second article. |
      Given I am not logged in
      ...
    
    1 scenario (1 passed)
    8 steps (8 passed)
    0m0.75s (34.45Mb)
