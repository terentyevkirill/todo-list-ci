<?php class Todo_model extends MY_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->return_as = "object";
    }

}
