<?php

class Todolist extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('todo_model');
    }

    public function index()
    {
        // get data from the model
        $items = $this->todo_model->get_all();
        $this->data['items'] = $items;
        // pass the data to the view
        $this->load->view('todolist', $this->data);

    }

    public function todo($id)
    {
        $data["item"] = $this->todo_model->get($id);
        $this->load->view('todo', $data);
    }

    public function add_task()
    {
        // get values from the post
        $item = $this->input->post('item');

        $insert = array();
        $insert['desc'] = $item;
        // insert them into the database
        $id = $this->todo_model->insert($insert);

        if ($id) {
            $items = $this->todo_model->get_all();

            $this->data['items'] = $items;
            $this->load->view('todolist', $this->data);
        } else {
            echo "did not record values";
        }
    }


    function edit_task($id)
    {
        if ($id) {
            $item = $this->input->post('item');
            $update = array();
            $updatep['id'] = $id;
            $update['desc'] = $item;
            $this->todo_model->update($update, $id);
        }
        $this->index();
    }

    function delete_task($id)
    {
        $this->todo_model->delete($id);
        $this->index();
    }

}