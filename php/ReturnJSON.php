<?php
/**
 * Created by PhpStorm.
 * User: vanminh
 * Date: 30/10/2018
 * Time: 09:41
 */

class ReturnJSON
{
    public $status, $data;
    public function toJSON() {
        return json_encode($this);
    }

}