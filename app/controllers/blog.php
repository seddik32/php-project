
<?php


class blog extends controller{

    public function index()
    {
        parent::view();
        parent::model();
        $this->view->render("pages/blog.php");
    }
}
