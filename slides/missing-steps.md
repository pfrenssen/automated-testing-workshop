## Defining your own steps

    $ ./behat
    
    1 scenario (1 undefined)
    5 steps (4 passed, 1 undefined)
    0m5.47s (42.90Mb)
    
    --- FeatureContext has missing steps. Define them with these snippets:
    
        /**
         * @Then I should see :arg1 news articles
         */
        public function iShouldSeeNewsArticles($arg1)
        {
            throw new PendingException();
        }
