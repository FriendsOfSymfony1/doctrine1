<?php

// UserTable doesn't extend Doctrine_Table -> Doctrine_Connection
// won't initialize grouptable when Doctrine_Connection->getTable('User') is called
class UserTable extends Doctrine_Table { }
