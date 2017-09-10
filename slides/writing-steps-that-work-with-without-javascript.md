### Writing steps that work with/without JavaScript

```
trait BrowserCapabilityDetectionTrait {

  public function browserSupportsJavascript() {
    $driver = $this->getSession()->getDriver();
    try {
      $driver->executeScript('return;');
      return TRUE;
    }
    catch (UnsupportedDriverActionException $e) {
      return FALSE;
    }
  }

}
```
