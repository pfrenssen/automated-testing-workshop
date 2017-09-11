## Implementation

    /**
     * @Then I should see :number news articles
     */
    public function assertNewsArticleCount($number) {
      $this->assertSession()->elementsCount('css', 'article.news', $number);
    }
    
See MinkContext and DrupalContext
