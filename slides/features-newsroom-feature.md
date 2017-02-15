<h3>features/newsroom.feature</h3>
          <pre><div class="hljs">
           @api
           Scenario: Anonymous user can see the news overview
             Given "News article" content:
             | title     | body                |
             | Article 1 | The first article.  |
             | Article 2 | The second article. |

             Given I am not logged in
             When I visit "news"
             Then I should see the heading "News"
             And I should see the link "Article 1"
             And I should see the text "The first article."
             And I should see the link "Article 2"
             And I should see the text "The second article."
          </div></pre>
        