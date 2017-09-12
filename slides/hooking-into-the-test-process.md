## Hooking into the test process

```
/**
 * @AfterScenario
 */
protected function cleanupNodes() {
  foreach ($this->nodes as $node) {
    $node->delete();
  }
}
```
