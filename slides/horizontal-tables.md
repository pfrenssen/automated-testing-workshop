## Horizontal tables

```
/**
 * Creates news articles.
 *
 * Table format:
 * | title      | body       |
 * | News title | Body text. |
 *
 * @Given the following news articles:
 */
public function givenNewsArticles(TableNode $news_table) {
  foreach ($news_table->getColumnsHash() as $values) {
    Node::create($values)->save();
  }
}
```
