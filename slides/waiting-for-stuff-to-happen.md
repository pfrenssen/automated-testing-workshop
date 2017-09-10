### Waiting for stuff to happen

```
$condition = "jQuery('.some_selector').length > 0;";
$timeout = 10000;
$this->assertJsCondition($condition, $timeout);
```

* Most DOM changes are not instant
* Waiting for changes reduces random failures
* Avoid using `sleep()`
