## Vertical tables

```
/**
 * Creates news articles.
 *
 * Table format:
 * | title        | body         |
 * | News title 1 | Body text 1. |
 * | News title 2 | Body text 2. |
 *
 * @Given the following news articles:
 */
public function givenNewsArticles(TableNode $news_table) {
  foreach ($news_table->getColumnsHash() as $values) {
    $values['type'] = 'news';
    Node::create($values)->save();
  }
}
```
