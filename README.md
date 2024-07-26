# test-composer-package
test-composer-package

tutor creation composer package on github

1. create repo user/test-composer-package

2. add public key to https://github.com/settings/keys

cat ~/.ssh/id_rsa.pub 

3. mkdir test-composer-package

4. cd test-composer-package

5. git clone git@github.com:rulon/test-composer-package.git .

6. try edit this file ./README.md

7. 
```
git remote -vvvv
origin  git@github.com:rulon/test-composer-package.git (fetch)
origin  git@github.com:rulon/test-composer-package.git (push)
```
8. git add .

9. git ci -m "commit1"

10. git push

11. see: https://github.com/rulon/test-composer-package

12. mkdir src && cd src

13. create your files. for example MyClass.php

14. composer init

15. see composer.json like:
```
cat composer.json 
{
    "name": "rulon/test-composer-package",
    "description": "descr text",
    "type": "library",
    "autoload": {
        "psr-4": {
            "Rulon\\TestComposerPackage\\": "src/"
        }
    },
    "authors": [
        {
            "name": "author name"
        }
    ],
    "require": {}
}

```

16. edit src/MyClass.php
```
<?php
/**
 *
 * @since 2024-07-26 20:22
 */
namespace Rulon\TestComposerPackage;

class MyClass
{
    public function __construct()
    {
        echo "\n\n" . __METHOD__ . "\n\n";
    }
}
```
17. testing namespaces. create index.php
```
<?php
/**
 * @since 2024-07-26 20:30
 */

use Rulon\TestComposerPackage\MyClass;

require_once __DIR__ . '/vendor/autoload.php';

//relative namespace
$testObj1 = new Rulon\TestComposerPackage\MyClass;

//absolute namespace
$testObj2 = new \Rulon\TestComposerPackage\MyClass;

//short class name
$testObj2 = new MyClass;

```
call:

php index.php

repeat items 8-10