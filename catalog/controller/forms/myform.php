<?php
class ControllerFormsMyform extends Controller{

    public function index()
    {
        if(($this->request->server['REQUEST_METHOD'] == 'POST')) {

            $this->load->model('forms/myform');

            $form_id = $this->model_forms_myform->saveData($this->request->post);
            if($form_id) {
                $this->response->redirect($this->url->link('forms/myform'));
            }
        }

        $this->document->setTitle('My Form');
        $data['breadcrumbs'] = array();

        $route = $this->request->get['route'];

        $data['breadcrumbs'][] = array(
            'text' => 'Home',
            'href' => $this->url->link('common/home'),
            'separator' => false
        );
        $data['breadcrumbs'][] = array(
            'text' => 'My Form',
            'href' => $this->url->link($route),
            'separator' => '|'
        );

        $data['form_heading'] = 'My Form Heading';
        $data['first_value'] = 'Firstname: ';
        $data['second_value'] = 'Lastname: ';
        $data['third_value'] = 'Passport No.: ';
        $data['forth_value'] = 'Phone No.: ';

        $data['continue'] = $this->url->link('common/home');
        $data['button_continue'] = 'Continue';

        $data['column_left'] = $this->load->controller('common/column_left');
        $data['column_right'] = $this->load->controller('common/column_right');
        $data['content_top'] = $this->load->controller('common/content_top');
        $data['content_bottom'] = $this->load->controller('common/content_bottom');
        $data['footer'] = $this->load->controller('common/footer');
        $data['header'] = $this->load->controller('common/header');

        $this->response->setOutput($this->load->view('forms/myform', $data));

    }
}
?>
