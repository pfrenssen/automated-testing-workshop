## Subcontexts for modules

`mymodule.behat.inc`

```
class NewsRoomSubContext extends DrupalSubContextBase {

  /**
   * @Given the following news articles:
   */
  public function givenNewsArticles(TableNode $news_table) {
    // Put module specific steps in "subcontexts".
  }

}
```
