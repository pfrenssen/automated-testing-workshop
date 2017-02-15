## Gherkin example

    Feature: Product highlights
      In order to promote specific products
      As a marketing manager
      I need to highlight products on the homepage
    
    Scenario: View product highlights
      Given I have 3 product highlights
      When I visit the frontpage
      Then I should see 3 highlighted products
