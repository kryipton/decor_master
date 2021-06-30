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


        $data["contact"] = $this->db->get("contact")->row_array();
        $data["social"] = $this->db->get("social")->row_array();



        $data["slides"] = $this->db->order_by("id", "desc")->get("slider")->result_array();
        $data["about"] = $this->db->get("about")->row_array();

        $data["page"] = "home/index";
        $this->load->view('front/includes/index', $data);
    }

    public function about()
    {
        //hamisinda cagirilacaqlar
        $data["slides"] = $this->db->order_by("id", "desc")->get("slider")->result_array();
        $data["contact"] = $this->db->get("contact")->row_array();
        $data["social"] = $this->db->get("social")->row_array();
        //hamisinda cagirilacaqlar

        $data["about"] = $this->db->get("about")->row_array();

        $data["page"] = "about/index";
        $this->load->view('front/includes/index', $data);
    }

    public function services()
    {
        //hamisinda cagirilacaqlar
        $data["slides"] = $this->db->order_by("id", "desc")->get("slider")->result_array();
        $data["contact"] = $this->db->get("contact")->row_array();
        $data["social"] = $this->db->get("social")->row_array();
        //hamisinda cagirilacaqlar

        $data["services"] = $this->db->order_by("id", "desc")->get("services")->result_array();

        $data["page"] = "services/index";
        $this->load->view('front/includes/index', $data);
    }

    public function projects()
    {
        //hamisinda cagirilacaqlar
        $data["slides"] = $this->db->order_by("id", "desc")->get("slider")->result_array();
        $data["contact"] = $this->db->get("contact")->row_array();
        $data["social"] = $this->db->get("social")->row_array();
        //hamisinda cagirilacaqlar

        $data["projects"] = $this->db->order_by("id", "desc")->get("projects")->result_array();

        $data["page"] = "projects/index";
        $this->load->view('front/includes/index', $data);
    }


    public function contact()
    {
        //hamisinda cagirilacaqlar
        $data["slides"] = $this->db->order_by("id", "desc")->get("slider")->result_array();
        $data["contact"] = $this->db->get("contact")->row_array();
        $data["social"] = $this->db->get("social")->row_array();
        //hamisinda cagirilacaqlar


        $data["page"] = "contact/index";
        $this->load->view('front/includes/index', $data);
    }

    public function gallery()
    {
        //hamisinda cagirilacaqlar
        $data["slides"] = $this->db->order_by("id", "desc")->get("slider")->result_array();
        $data["contact"] = $this->db->get("contact")->row_array();
        $data["social"] = $this->db->get("social")->row_array();
        //hamisinda cagirilacaqlar

        $data["gallery"] = $this->db->order_by("id", "desc")->get("gallery")->result_array();

        $data["page"] = "gallery/index";
        $this->load->view('front/includes/index', $data);
    }



}