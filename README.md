# test-composer-package
test-composer-package

## Tutor creation composer package on github

1. create repo user/test-composer-package (user replace with your login)

2. add public key if needed to https://github.com/settings/keys

see here:
```bash
cat ~/.ssh/id_rsa.pub 
```
3. on local computer:
```bash
mkdir test-composer-package 
```

4. 
```bash
cd test-composer-package
```

5. 
```bash
git clone git@github.com:rulon/test-composer-package.git .
```
put here ^^^ your real path

6. try edit this file ./README.md

7. check
```
git remote -vvvv
origin  git@github.com:rulon/test-composer-package.git (fetch)
origin  git@github.com:rulon/test-composer-package.git (push)
```
8. git add .

9. git ci -m "commit1"

10. git push

11. see results (put your real url): https://github.com/rulon/test-composer-package

12. 
```bash
mkdir src && cd src
```

13. create your files. for example MyClass.php

14. 
```bash
composer init
```

15. check composer.json 
```bash
cat composer.json 
```
```json
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
```php
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
```php
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
$testObj3 = new MyClass;

```
call:
```bash
php index.php
```
18. repeat items 8-11

19. cd to project that requires your new package
add sections to composer.json

```json
{
    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/rulon/test-composer-package"
        }
    ],
    "require": {
        "rulon/test-composer-package": "dev-master"
    }
}
```

20. 
```bash
composer install
```

21. test
```bash
cp vendor/rulon/test-composer-package/index.php .
php index.php
```
result:
```
Rulon\TestComposerPackage\MyClass::__construct

Rulon\TestComposerPackage\MyClass::__construct

Rulon\TestComposerPackage\MyClass::__construct

```

Enjoy!

<!-- 

git add . && git ci --amend --no-edit && git push -f



-->