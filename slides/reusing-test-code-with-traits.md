## Reusing test code with traits

```
trait UtilityTrait {

  /**
   * Explodes and sanitizes a comma separated step argument.
   */
  protected function explodeCommaSeparatedStepArgument($argument) {
    $arguments = explode(',', $argument);
    $arguments = array_map('trim', $arguments);
    $arguments = array_filter($arguments);

    return $arguments;
  }

}
```
