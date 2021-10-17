<?php

class Partner
{
    public string $name;
    public $subs = array();

    public function setPartnerName(string $name)
    {
        $this->name = $name;
    }

    public function subscribe(Observer $sub)
    {
        array_push($this->subs,$sub);
    }

    function update()
    {
        foreach ($this->subs as $observer){
            $observer->alert();
        }
    }
}