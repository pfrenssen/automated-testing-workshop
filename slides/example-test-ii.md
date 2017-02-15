<h2>Example test II</h2>
          <pre><div class="hljs">
Scenario Outline: Anonymous user cannot access site administration
  Given I am not logged in
  When I go to "<path>"
  Then I should get an access denied error

  Examples:
  | path            |
  | admin           |
  | admin/config    |
  | admin/content   |
  | admin/people    |
  | admin/structure |
  | node/add        |
  | node/add/page   |
          </path>
</div></pre>
        