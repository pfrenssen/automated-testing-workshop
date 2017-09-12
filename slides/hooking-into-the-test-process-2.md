## Hooking into the test process

```
/**
 * @var \Drupal\node\NodeInterface[]
 */
protected $nodes = [];

public function givenNewsArticle(TableNode $news_table) {
  // ...
  $node = Node::create($values);
  $node->save();
  $this->nodes[] = $node;
}
```
