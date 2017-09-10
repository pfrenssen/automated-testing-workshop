## Entering text in a wysiwyg editor

```
  /**
   * @When I enter :text in the :label wysiwyg editor
   */
  public function enterTextInWysiwyg($text, $label) {
    if ($this->browserSupportsJavascript()) {
      $this->pressWysiwygButton($label, 'Source');
      $this->setWysiwygText($label, $text);
    }
    else {
      $this->getSession()->getPage()->fillField($label, $text);
    }
  }
```

Uses the `WysiwygTrait`

https://github.com/ec-europa/joinup-dev/blob/develop/tests/src/Traits/WysiwygTrait.php
