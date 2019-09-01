Doctrine1
=========

About this version
------------------

This is a community driven fork of doctrine 1, as official support has been interrupted long time ago.

**Do not use it for new projects: this version is great to improve existing symfony1 applications using doctrine1, but [Doctrine2](https://www.doctrine-project.org/projects/orm.html) is the way to go today.**


Requirements
------------

PHP 5.3 and up.


Installation
------------

Using [Composer](http://getcomposer.org/doc/00-intro.md) as dependency management:

    composer require friendsofsymfony1/doctrine1 "1.5.*"
    composer install



Tests
-----

### Prerequisites

  * docker-engine version 17.12.0+
  * docker-compose version 1.20.0+

### How to execute all tests on all supported PHP versions and dependencies?

    tests/bin/test

### When you finish your work day, do not forget to clean up your desk

    docker-compose down


Documentation
-------------

Read the official [doctrine1 documentation](https://web.archive.org/web/20171008235327/http://docs.doctrine-project.org:80/projects/doctrine1/en/latest/en/manual/index.html)


Contributing
------------

You can send pull requests or create an issue.
