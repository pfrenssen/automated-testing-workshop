## Hooking into the test process

```
/**
 * @Given the following news article:
 */
public function givenNewsArticle(TableNode $news_table) {
  $node = Node::create($news_table->getRowsHash());
  $node->save();
  $this->nodes[] = $node;
}

/**
 * @AfterScenario
 */
protected function cleanupNodes() {
  foreach ($this->nodes as $node) {
    $node->delete();
  }
}
```
