<h2>Example test I</h2>
          <pre><div class="hljs">
Scenario: Anonymous user can see the user login page
  Given I am not logged in
  When I visit "user"
  Then I should see the text "Log in"
  And I should see the text "Reset your password"
  And I should see the text "Username"
  And I should see the text "Password"
  But I should not see the text "Log out"
  And I should not see the text "My account"
          </div></pre>
        