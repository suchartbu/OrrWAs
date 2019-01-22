<?php

/**
 * หน้าจอหลักของระบบ
 *
 * @author it
 */
class Welcome extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        //$this->load->model('OrrAuthorize');
    }

    /**
     * index :
     * @param String $name Description
     * @return NULL
     */
    public function index() {
        //$sign_ = $this->OrrAuthorize->getSignData();
        $sign_ = ['status'=>''];
        $orr_ = ['title' => "Orr WAs"];
        if ($sign_['status'] === 'Online') {
            $menu_ = ['projects_url' => site_url('Setting'), 'mark_url' => site_url('Mark/signout'), 'mark_user' => $sign_['user'], 'mark_user_icon' => "glyphicon glyphicon-user", 'mark_function' => "Sign Out", 'mark_function_icon' => "glyphicon glyphicon-log-out"];
        } else {
            $menu_ = ['projects_url' => site_url('Setting'), 'mark_url' => site_url('Mark'), 'mark_user' => "", 'mark_user_icon' => "glyphicon glyphicon-info-sign", 'mark_function' => "Sign In", 'mark_function_icon' => "glyphicon glyphicon-log-in"];
        }
        //$menu_['my_sys'] = $this->OrrAuthorize->getSysParent();
        $menu_['my_sys'] = 'OrrWAs';
        echo assets_url('jquery-ui/jquery-ui.min.css');
        $this->setMyView((object) ['output' => '', 'js_files' => [], 'css_files' => [], 'view_' => $sign_, 'orr_' => $orr_, 'menu_' => $menu_]);
    }

    private function setMyView(object $output) {
        //$output->view_['css_files'] = ['https://[::1]/OrrWAs/assets/jquery-ui/jquery-ui.min.css', 'https://[::1]/OrrWAs/assets/bootstrap-3/css/bootstrap.min.css'];
        $output->view_['css_files'] = [assets_url('jquery-ui/jquery-ui.min.css'), assets_url('bootstrap-3/css/bootstrap.min.css')];
        $output->view_['js_files'] = [assets_url('jquery-3.min.js'), assets_url('jquery-ui/jquery-ui.min.js'), assets_url('bootstrap-3/js/bootstrap.min.js')];
        $this->load->view('Welcome_', $output);
    }

}
