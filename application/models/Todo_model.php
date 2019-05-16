<?php class Todo_model extends MY_Model
{

    public $table = "todos";
    public $primary_key = "id";
    public $description = "desc";

    public function __construct()
    {
        parent::__construct();
        $this->return_as = "object";
    }

    function updateById($id)
    {
        $data = array();
        $data['desc'] = $this->input->post('item');
        $this->db->where('id', $id)->update('todos', $data);
    }

    function deleteById($id)
    {
        $this->db->where('id', $id)->delete('todos');
    }
}
