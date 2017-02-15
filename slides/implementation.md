## Implementation

    /**
     * @Then I should see :number news articles
     */
    public function assertNewsArticleCount($number) {
      $this->assertSession()->elementsCount('css', 'div.news-article', $number);
    }
    
See MinkContext and DrupalContext
