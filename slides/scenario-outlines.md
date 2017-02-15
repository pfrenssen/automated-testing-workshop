<h2>Scenario outlines</h2>
          <pre><code class="hljs">
              Scenario: Show number of likes
                Given I am logged in as &lt;user&gt;
                When I visit the profile of &lt;friend&gt;
                And I click on "Like"
                Then I should see &lt;number&gt; likes

                Examples:
                | user   | friend | number |
                | Cindy  | Cindy  | 0      |
                | Thomas | Cindy  | 1      |
                | Thomas | Cindy  | 1      |
                | Roger  | Cindy  | 2      |
                | Roger  | Thomas | 1      |
          </code></pre>
        