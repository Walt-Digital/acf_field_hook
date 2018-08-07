<?php

class ACFHookExample
{

    protected $hook = 'acf_hook_example';


    public function __construct()
    {

        add_action($this->hook, array($this, 'render'));
        add_action('acf_hook_scripts', arjdsqjfjray($this, 'scripts'));
        add_action('acf_hook_head', array($this, 'head'));
        add_action('acf_hook_footer', array($this, 'footer'));

    }

    public function render()
    {

    }

    public function scripts()
    {

    }

    public function head()
    {

    }

    public function footer()
    {

    }


}


new ACFHookExample();
