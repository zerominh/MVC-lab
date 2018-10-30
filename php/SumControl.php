<?php
/**
 * Created by PhpStorm.
 * User: vanminh
 * Date: 30/10/2018
 * Time: 09:32
 */
require_once "ReturnJSON.php";
require_once "SumModel.php";
class SumControl
{
    private $retJSON;
    public function __construct()
    {
        $this->retJSON = new ReturnJSON();
    }

    public function process() {
       if (isset($_GET["x"]) && isset($_GET["y"])
           && is_numeric($_GET["x"]) && is_numeric($_GET["y"])) {
           $x = $_GET["x"];
           $y = $_GET["y"];
           $m = new SumModel($x, $y);
           $m->solve();
           $ret = $m->getSum();
           $this->retJSON->status = "ok";
           $this->retJSON->data = strval($ret);
       } else {
           $this->retJSON->status = "fail";
           $this->retJSON->data = "x, y must be number.";

       }

        echo $this->retJSON->toJSON();
   }
}