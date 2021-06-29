<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class HomeController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $dil = $this->uri->segment(1);
        if ($dil == ""){
            $dil = "az";
        }
        $this->lang->load($dil, $dil);

        $this->session->set_userdata("lang", $dil);
    }

    public function index()
    {
        //hamisinda cagirilacaqlar
//        $data["menus"] = $this->db->order_by("id", "asc")->get("menus")->result_array();
//        $data["contact"] = $this->db->get("contact")->row_array();
//        $data["logo"] = $this->db->get("logo")->row_array();
//        $data["social"] = $this->db->get("social")->row_array();
        //hamisinda cagirilacaqlar

        $data["slides"] = $this->db->order_by("id", "desc")->get("slider")->result_array();
        $data["about"] = $this->db->get("about")->row_array();

        $data["page"] = "home/index";
        $this->load->view('front/includes/index', $data);
    }

    public function services()
    {
        //hamisinda cagirilacaqlar
        $data["slides"] = $this->db->order_by("id", "desc")->get("slider")->result_array();
        //hamisinda cagirilacaqlar


        $data["page"] = "services/index";
        $this->load->view('front/includes/index', $data);
    }


}