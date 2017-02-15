## Configure your dev environment

build.properties.local

    # Database settings.
    drupal.db.name = myproject
    drupal.db.user = root
    drupal.db.password = hunter2

    # The base URL. Used for functional tests.
    drupal.base_url = http://drupal-project.local
    
* Create the 'build.properties.local' file
* Contains personal settings for local dev - don't commit!
* Check 'build.properties.dist' for more options
