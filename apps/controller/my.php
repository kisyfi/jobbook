<?php
class my extends controller
{
    function dashboard()
    {
        $this->view("head/main");
        $this->view("user/dashboard");
        $this->view("foot/main");

    }
}
