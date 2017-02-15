<h2>Defining your own steps</h2>
          <pre><div class="hljs">
          @api
          Scenario: Anonymous user can see the news overview
            Given "News article" content:
            | title     | body                |
            | Article 1 | The first article.  |
            | Article 2 | The second article. |
            | Article 3 | The third article.  |

            Given I am not logged in
            When I visit "news"
            Then I should see the heading "News"
            And I should see 3 news articles     &lt;&lt;&lt;&lt;&lt; CUSTOM STEP
          </div></pre>
        