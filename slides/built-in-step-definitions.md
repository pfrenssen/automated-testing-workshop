<h2>Built-in step definitions</h2>
          <pre><div class="hljs">
            $ ./behat -di

            <span class="fragment">Given I am not logged in
            Given I am logged in as :name</span>

            <span class="fragment">Given a/an :type (content )with the title :title</span>

            <span class="fragment">When I visit :path
            When I click :link
            When I enter :value for :field
            When I press the :button button</span>

            <span class="fragment">Then I should see the text :text
            Then I should not see the link :link</span>
          </div></pre>
          <p class="fragment">More than 100 built-in steps!</p>
        