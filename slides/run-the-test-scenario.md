<h2>Run the test</h2>
          <pre><div class="hljs">
          $ ./behat

          <span class="fragment">
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
           </span>
          </div></pre>
          <aside class="notes">
            For the tests to pass you might need to implement the functionality :)
          </aside>