<?php
/**
 * Created by PhpStorm.
 * User: roger
 * Date: 5/10/15
 * Time: 20:25
 */

require __DIR___ . "vendor/autoload.php";
use Com\iesebre\Dam2\rogermelich\Person\Person;

$Person = new Person();
$Person->type = "L'alumna";
$Person->getGivenName = "Pepita Palote";
$Person->render();