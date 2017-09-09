## Using tables

```
/**
 * Creates a news article.
 *
 * Table format:
 * | title | News title |
 * | body  | Body text. |
 *
 * @Given the following news article:
 */
public function givenNewsArticle(TableNode $news_table) {
  $values = $news_table->getRowsHash();
  Node::create($values)->save();
}
```
