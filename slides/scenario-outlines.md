## Scenario outlines

    Scenario: Show number of likes
      Given I am logged in as <user>
      When I visit the profile of <friend>
      And I click on "Like"
      Then I should see <number> likes
    
      Examples:
      | user   | friend | number |
      | Cindy  | Cindy  | 0      |
      | Thomas | Cindy  | 1      |
      | Thomas | Cindy  | 1      |
      | Roger  | Cindy  | 2      |
      | Roger  | Thomas | 1      |
