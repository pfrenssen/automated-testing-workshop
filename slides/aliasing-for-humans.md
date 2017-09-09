## Aliasing for humans

```
/**
 * @Given the following news article:
 */
public function givenNewsArticle(TableNode $news_table) {
  $aliases = self::newsFieldAliases();

  $values = [];
  // Replace the column aliases with the actual field names.
  foreach ($collection_table->getRowsHash() as $key => $value) {
    if (array_key_exists($key, $aliases)) {
      $values[$aliases[$key]] = $value;
    }
  };

  Node::create($values)->save();
}
```
