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
        $data["slides"] = $this->db->order_by("id", "desc")->get("slide")->result_array();
        $data["menus"] = $this->db->order_by("id", "asc")->get("menus")->result_array();
        $data["contact"] = $this->db->get("contact")->row_array();
        $data["logo"] = $this->db->get("logo")->row_array();
        $data["social"] = $this->db->get("social")->row_array();
        //hamisinda cagirilacaqlar

        $data["catalog_headers"] = $this->db->order_by("id", "asc")->get("catalog_pictures")->result_array();


        $data["page"] = "home/index";
        $this->load->view('front/includes/index', $data);
    }

    public function services()
    {
        //hamisinda cagirilacaqlar
        $data["slides"] = $this->db->order_by("id", "desc")->get("slide")->result_array();
        $data["menus"] = $this->db->order_by("id", "asc")->get("menus")->result_array();
        $data["contact"] = $this->db->get("contact")->row_array();
        $data["logo"] = $this->db->get("logo")->row_array();
        $data["social"] = $this->db->get("social")->row_array();
        //hamisinda cagirilacaqlar

        $data["menu"] = $this->db->where("id", 4)->get("menus")->row_array();

        $data["page"] = "services/index";
        $this->load->view('front/includes/index', $data);
    }

    public function camins()
    {
        //hamisinda cagirilacaqlar
        $data["slides"] = $this->db->order_by("id", "desc")->get("slide")->result_array();
        $data["menus"] = $this->db->order_by("id", "asc")->get("menus")->result_array();
        $data["contact"] = $this->db->get("contact")->row_array();
        $data["logo"] = $this->db->get("logo")->row_array();
        $data["social"] = $this->db->get("social")->row_array();
        //hamisinda cagirilacaqlar

        $data["menu"] = $this->db->where("id", 2)->get("menus")->row_array();
        $data["catalog"] = $this->db->order_by("id", "desc")->limit(15)->where("menu_id", 2)->get("photo_catalog")->result_array();

        $last_element = end($data["catalog"]);
        $data["last_id"] = $last_element["id"];

        $data["page"] = "kamin/index";
        $this->load->view('front/includes/index', $data);
    }

    public function mangals()
    {
        //hamisinda cagirilacaqlar
        $data["slides"] = $this->db->order_by("id", "desc")->get("slide")->result_array();
        $data["menus"] = $this->db->order_by("id", "asc")->get("menus")->result_array();
        $data["contact"] = $this->db->get("contact")->row_array();
        $data["logo"] = $this->db->get("logo")->row_array();
        $data["social"] = $this->db->get("social")->row_array();
        //hamisinda cagirilacaqlar


        $data["menu"] = $this->db->where("id", 3)->get("menus")->row_array();
        $data["catalog"] = $this->db->order_by("id", "desc")->limit(15)->where("menu_id", 3)->get("photo_catalog")->result_array();

        $last_element = end($data["catalog"]);
        $data["last_id"] = $last_element["id"];


        $data["page"] = "mangal/index";
        $this->load->view('front/includes/index', $data);
    }

    public function photo_catalog()
    {
        //hamisinda cagirilacaqlar
        $data["slides"] = $this->db->order_by("id", "desc")->get("slide")->result_array();
        $data["menus"] = $this->db->order_by("id", "asc")->get("menus")->result_array();
        $data["contact"] = $this->db->get("contact")->row_array();
        $data["logo"] = $this->db->get("logo")->row_array();
        $data["social"] = $this->db->get("social")->row_array();
        //hamisinda cagirilacaqlar

        $data["menu"] = $this->db->where("id", 5)->get("menus")->row_array();
        $data["catalog_headers"] = $this->db->order_by("id", "asc")->get("catalog_pictures")->result_array();


        $data["page"] = "photo_catalog/index";
        $this->load->view('front/includes/index', $data);
    }

    public function video_catalog()
    {
        //hamisinda cagirilacaqlar
        $data["slides"] = $this->db->order_by("id", "desc")->get("slide")->result_array();
        $data["menus"] = $this->db->order_by("id", "asc")->get("menus")->result_array();
        $data["contact"] = $this->db->get("contact")->row_array();
        $data["logo"] = $this->db->get("logo")->row_array();
        $data["social"] = $this->db->get("social")->row_array();
        //hamisinda cagirilacaqlar

        $data["menu"] = $this->db->where("id", 6)->get("menus")->row_array();
        $data["video_catalog"] = $this->db->get("video_catalog")->result_array();


        $data["page"] = "video_catalog/index";
        $this->load->view('front/includes/index', $data);
    }

    public function contact()
    {
        //hamisinda cagirilacaqlar
        $data["slides"] = $this->db->order_by("id", "desc")->get("slide")->result_array();
        $data["menus"] = $this->db->order_by("id", "asc")->get("menus")->result_array();
        $data["contact"] = $this->db->get("contact")->row_array();
        $data["logo"] = $this->db->get("logo")->row_array();
        $data["social"] = $this->db->get("social")->row_array();
        //hamisinda cagirilacaqlar

        $data["menu"] = $this->db->where("id", 7)->get("menus")->row_array();

        $data["page"] = "contact/index";
        $this->load->view('front/includes/index', $data);
    }

    public function all_photo_catalog()
    {
        //hamisinda cagirilacaqlar
        $data["slides"] = $this->db->order_by("id", "desc")->get("slide")->result_array();
        $data["menus"] = $this->db->order_by("id", "asc")->get("menus")->result_array();
        $data["contact"] = $this->db->get("contact")->row_array();
        $data["logo"] = $this->db->get("logo")->row_array();
        $data["social"] = $this->db->get("social")->row_array();
        //hamisinda cagirilacaqlar

        $data["menu"] = $this->db->where("id", 5)->get("menus")->row_array();
        $data["catalog"] = $this->db->order_by("id", "desc")->limit(15)->get("photo_catalog")->result_array();

        $last_element = end($data["catalog"]);
        $data["last_id"] = $last_element["id"];


        $data["page"] = "all_photo_catalog/index";
        $this->load->view('front/includes/index', $data);
    }

    public function get_catalog()
    {

        $menu_id = $this->input->get("menu_id");
        $last_id = $this->input->get("last_id");

        if ($menu_id != -1){
            if (!empty($last_id)){

                $catalog = $this->db->order_by("id", "desc")->where("menu_id", $menu_id)->where("id <", $last_id)->limit(16)->get("photo_catalog")->result_array();

                $last_element = end($catalog);
                $last_id = $last_element["id"];


                $str = "";
                foreach ($catalog as $item){
                    $str = $str . '<div class="col-md-4 col-lg-4 col-xs-6 c_item" id="'. $item["id"] .'"><div class="single-product" style="margin-bottom: 20px"><div class="image" style="height: 100%"><img style="height: 100%" src="'. base_url("uploads/photo_catalog/$item[file]") .'" alt=""><div class="opacity tran4s"><a data-fancybox="Shop" href="'. base_url("uploads/photo_catalog/$item[file]") .'" class="tran3s" title="We’ve done lot’s of work, Let’s Check">+</a></div></div><a href="#" class="tran3s">+</a></div> <!-- /.single-product --></div>';
                }

                $result = json_encode([
                    "last_id" => $last_id,
                    "data" => $str
                ]);


                echo $result;
            }
        }else{
            if (!empty($last_id)){

                $catalog = $this->db->order_by("id", "desc")->where("id <", $last_id)->limit(16)->get("photo_catalog")->result_array();

                $last_element = end($catalog);
                $last_id = $last_element["id"];


                $str = "";
                foreach ($catalog as $item){
                    $str = $str . '<div class="col-md-4 col-lg-4 col-xs-6 c_item" id="'. $item["id"] .'">
                            <div class="single-product" style="margin-bottom: 20px">
                                <div class="image" style="height: 100%">
                                    <img style="height: 100%" src="'. base_url("uploads/photo_catalog/$item[file]") .'" alt="">
                                    <div class="opacity tran4s"><a data-fancybox="Shop" href="'. base_url("uploads/photo_catalog/$item[file]") .'" class="tran3s" title="We’ve done lot’s of work, Let’s Check">+</a></div>
                                </div>
                                <a href="#" class="tran3s">+</a>
                            </div> <!-- /.single-product -->
                        </div>';
                }

                $result = json_encode([
                    "last_id" => $last_id,
                    "data" => $str
                ]);


                echo $result;
            }
        }

        die();


    }

}