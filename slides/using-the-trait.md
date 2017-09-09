### Using the trait

```
use UtilityTrait;

/**
 * @Then (the following )buttons should not be present :buttons
 */
public function assertButtonsNotVisible($buttons) {
  $buttons = $this->explodeCommaSeparatedStepArgument($buttons);
  $page = $this->getSession()->getPage();

  $found = [];
  foreach ($buttons as $button) {
    if ($page->findButton($button)) {
      $found[] = $button;
    }
  }

  if (!empty($found)) {
    throw new \Exception('Button(s) should not be present, but were found: ' . implode(', ', $found));
  }
}
```
