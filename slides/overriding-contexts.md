## Overriding contexts

`tests/src/Context/DrupalContext.php`

```
namespace Drupal\joinup\Context;

use Drupal\DrupalExtension\Context\DrupalContext as DrupalExtensionDrupalContext;

class DrupalContext extends DrupalExtensionDrupalContext {

  public function loggedIn() {
    $session = $this->getSession();
    $session->visit($this->locatePath('/'));

    // Check if the 'logged-in' class is present on the page.
    $element = $session->getPage();
    return $element->find('css', 'body.user-logged-in');
  }

}
```
