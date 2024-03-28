<?php 

class Layout{

    public function index($content){
        $this->renderize("header");
        $this->renderize($content);
        $this->renderize("footer");
    }

    public function renderize($page){
        include $page.".php";
    }
}

?>