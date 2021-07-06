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
        $data["logo"] = $this->db->get("logo")->row_array();
        //hamisinda cagirilacaqlar


        $data["contact"] = $this->db->get("contact")->row_array();
        $data["social"] = $this->db->get("social")->row_array();



        $data["slides"] = $this->db->order_by("id", "desc")->get("slider")->result_array();
        $data["about"] = $this->db->get("about")->row_array();
        $data["services"] = $this->db->order_by("id", "desc")->get("services")->result_array();
        $data["projects"] = $this->db->order_by("id", "desc")->get("projects")->result_array();
        $data["news"] = $this->db->order_by("id", "desc")->get("news")->result_array();
        $data["partners"] = $this->db->order_by("id", "desc")->get("partners")->result_array();


        $data["page"] = "home/index";
        $this->load->view('front/includes/index', $data);
    }

    public function about()
    {
        //hamisinda cagirilacaqlar
        $data["logo"] = $this->db->get("logo")->row_array();
        $data["slides"] = $this->db->order_by("id", "desc")->get("slider")->result_array();
        $data["contact"] = $this->db->get("contact")->row_array();
        $data["social"] = $this->db->get("social")->row_array();
        $data["partners"] = $this->db->order_by("id", "desc")->get("partners")->result_array();
        //hamisinda cagirilacaqlar

        $data["about"] = $this->db->get("about")->row_array();

        $data["page"] = "about/index";
        $this->load->view('front/includes/index', $data);
    }

    public function services()
    {
        //hamisinda cagirilacaqlar
        $data["logo"] = $this->db->get("logo")->row_array();

        $data["slides"] = $this->db->order_by("id", "desc")->get("slider")->result_array();
        $data["contact"] = $this->db->get("contact")->row_array();
        $data["social"] = $this->db->get("social")->row_array();
        $data["partners"] = $this->db->order_by("id", "desc")->get("partners")->result_array();
        //hamisinda cagirilacaqlar

        $data["services"] = $this->db->order_by("id", "desc")->get("services")->result_array();

        $data["page"] = "services/index";
        $this->load->view('front/includes/index', $data);
    }

    public function subServiceSingle($sub_service_id, $service_id, $lang)
    {

        //hamisinda cagirilacaqlar
        $data["logo"] = $this->db->get("logo")->row_array();

        $data["slides"] = $this->db->order_by("id", "desc")->get("slider")->result_array();
        $data["contact"] = $this->db->get("contact")->row_array();
        $data["social"] = $this->db->get("social")->row_array();
        $data["partners"] = $this->db->order_by("id", "desc")->get("partners")->result_array();
        //hamisinda cagirilacaqlar

        $data["gallery"] = $this->db->where("sub_service_id", $sub_service_id)->order_by("id", "desc")->get("sub_service_gallery")->result_array();

        $data["service"] = $this->db->where("id", $sub_service_id)->get("sub_service")->row_array();;


        $data["sub_services"] = $this->db->where("service_id", $service_id)->get("sub_service")->result_array();


        $data["page"] = "sub_service/single";
        $this->load->view('front/includes/index', $data);
    }

    public function serviceSingle($id)
    {
        //hamisinda cagirilacaqlar
        $data["logo"] = $this->db->get("logo")->row_array();

        $data["slides"] = $this->db->order_by("id", "desc")->get("slider")->result_array();
        $data["contact"] = $this->db->get("contact")->row_array();
        $data["social"] = $this->db->get("social")->row_array();
        $data["partners"] = $this->db->order_by("id", "desc")->get("partners")->result_array();
        //hamisinda cagirilacaqlar

        $data["services"] = $this->db->order_by("id", "desc")->get("services")->result_array();
        $data["gallery"] = $this->db->where("service_id", $id)->order_by("id", "desc")->get("services_gallery")->result_array();

        $data["service"] = $this->db->where("id", $id)->get("services")->row_array();;

        $data["sub_services"] = $this->db->where("service_id", $id)->get("sub_service")->result_array();


        $data["page"] = "services/single";
        $this->load->view('front/includes/index', $data);
    }

    public function projects()
    {
        //hamisinda cagirilacaqlar
        $data["logo"] = $this->db->get("logo")->row_array();

        $data["slides"] = $this->db->order_by("id", "desc")->get("slider")->result_array();
        $data["contact"] = $this->db->get("contact")->row_array();
        $data["social"] = $this->db->get("social")->row_array();
        $data["partners"] = $this->db->order_by("id", "desc")->get("partners")->result_array();
        //hamisinda cagirilacaqlar

        $data["projects"] = $this->db->order_by("id", "desc")->get("projects")->result_array();

        $data["page"] = "projects/index";
        $this->load->view('front/includes/index', $data);
    }

    public function projectSingle($id)
    {
        //hamisinda cagirilacaqlar
        $data["logo"] = $this->db->get("logo")->row_array();

        $data["slides"] = $this->db->order_by("id", "desc")->get("slider")->result_array();
        $data["contact"] = $this->db->get("contact")->row_array();
        $data["social"] = $this->db->get("social")->row_array();
        $data["partners"] = $this->db->order_by("id", "desc")->get("partners")->result_array();
        //hamisinda cagirilacaqlar

        $data["projects"] = $this->db->order_by("id", "desc")->get("projects")->result_array();
        $data["gallery"] = $this->db->where("project_id", $id)->order_by("id", "desc")->get("projects_gallery")->result_array();

        $data["project"] = $this->db->where("id", $id)->get("projects")->row_array();;

        if(empty($data["project"]))
            redirect(base_url());


        $data["page"] = "projects/single";
        $this->load->view('front/includes/index', $data);
    }

    public function contact()
    {
        //hamisinda cagirilacaqlar
        $data["logo"] = $this->db->get("logo")->row_array();

        $data["slides"] = $this->db->order_by("id", "desc")->get("slider")->result_array();
        $data["contact"] = $this->db->get("contact")->row_array();
        $data["social"] = $this->db->get("social")->row_array();
        $data["partners"] = $this->db->order_by("id", "desc")->get("partners")->result_array();
        //hamisinda cagirilacaqlar


        $data["page"] = "contact/index";
        $this->load->view('front/includes/index', $data);
    }

    public function sendmail()
    {
        $name = strip_tags($this->input->post("name"));
        $mail = strip_tags($this->input->post("email"));
        $msg = strip_tags($this->input->post("message"));

        if (!empty($name) && !empty($mail)  && !empty($msg)) {
            $contact= $this->db->get("contact")->row_array();;
            $mail="mutalib0101@gmail.com";

            $config = Array(
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.googlemail.com',
                'smtp_port' => 465,
                'smtp_user' => 'decormasterbaku@gmail.com',
                'smtp_pass' => 'DecorMasterBaku',
                'mailtype'  => 'html',
                'charset'  => 'html',
                'wordwrap'  => TRUE, );
            $this->email->set_newline(" \ r \ n ");
            $this->load->library("email");
            $this->email->initialize($config);
            $this->email->set_newline("\r\n");
            $this->email->from('decormasterbaku@gmail.com', $name);
            $this->email->to("$mail");
            $this->email->subject('Decor Master');
            $this->email->message("$name adlı şəxsdən mesaj:<br> $msg <br> <br> <strong>Şəxslə əlaqə:</strong> <br> $mail <br>") ;
            $this->email->send();
            echo $this->email->print_debugger();

        } else {
            echo "oops!";
        }

    }


    public function gallery()
    {
        //hamisinda cagirilacaqlar
        $data["logo"] = $this->db->get("logo")->row_array();

        $data["slides"] = $this->db->order_by("id", "desc")->get("slider")->result_array();
        $data["contact"] = $this->db->get("contact")->row_array();
        $data["social"] = $this->db->get("social")->row_array();
        $data["partners"] = $this->db->order_by("id", "desc")->get("partners")->result_array();
        //hamisinda cagirilacaqlar

        $data["gallery"] = $this->db->order_by("id", "desc")->get("gallery")->result_array();

        $data["page"] = "gallery/index";
        $this->load->view('front/includes/index', $data);
    }

    public function videos()
    {
        //hamisinda cagirilacaqlar
        $data["logo"] = $this->db->get("logo")->row_array();

        $data["slides"] = $this->db->order_by("id", "desc")->get("slider")->result_array();
        $data["contact"] = $this->db->get("contact")->row_array();
        $data["social"] = $this->db->get("social")->row_array();
        $data["partners"] = $this->db->order_by("id", "desc")->get("partners")->result_array();
        //hamisinda cagirilacaqlar

        $data["gallery"] = $this->db->order_by("id", "desc")->get("videos")->result_array();

        $data["page"] = "video_gallery/index";
        $this->load->view('front/includes/index', $data);
    }

    public function documents()
    {
        //hamisinda cagirilacaqlar
        $data["logo"] = $this->db->get("logo")->row_array();

        $data["slides"] = $this->db->order_by("id", "desc")->get("slider")->result_array();
        $data["contact"] = $this->db->get("contact")->row_array();
        $data["social"] = $this->db->get("social")->row_array();
        $data["partners"] = $this->db->order_by("id", "desc")->get("partners")->result_array();
        //hamisinda cagirilacaqlar

        $data["gallery"] = $this->db->order_by("id", "desc")->get("documents")->result_array();

        $data["page"] = "documents/index";
        $this->load->view('front/includes/index', $data);
    }

    public function news()
    {
        //hamisinda cagirilacaqlar
        $data["logo"] = $this->db->get("logo")->row_array();

        $data["slides"] = $this->db->order_by("id", "desc")->get("slider")->result_array();
        $data["contact"] = $this->db->get("contact")->row_array();
        $data["social"] = $this->db->get("social")->row_array();
        $data["partners"] = $this->db->order_by("id", "desc")->get("partners")->result_array();
        //hamisinda cagirilacaqlar

        $data["news"] = $this->db->order_by("id", "desc")->get("news")->result_array();

        $data["page"] = "news/index";
        $this->load->view('front/includes/index', $data);
    }


    public function newsSingle($id)
    {
        //hamisinda cagirilacaqlar
        $data["slides"] = $this->db->order_by("id", "desc")->get("slider")->result_array();
        $data["contact"] = $this->db->get("contact")->row_array();
        $data["social"] = $this->db->get("social")->row_array();
        $data["partners"] = $this->db->order_by("id", "desc")->get("partners")->result_array();
        //hamisinda cagirilacaqlar

        $data["news"] = $this->db->order_by("id", "desc")->get("news")->result_array();

        $data["gallery"] = $this->db->where("news_id", $id)->order_by("id", "desc")->get("news_gallery")->result_array();


        $data["newsSingle"] = $this->db->where("id", $id)->get("news")->row_array();;

        if(empty($data["newsSingle"]))
            redirect(base_url());

        $data["page"] = "news/single";
        $this->load->view('front/includes/index', $data);
    }


    public function search()
    {
        $lang=$this->session->userdata("lang");
        //hamisinda cagirilacaqlar
        $data["logo"] = $this->db->get("logo")->row_array();
        $data["slides"] = $this->db->order_by("id", "desc")->get("slider")->result_array();
        $data["contact"] = $this->db->get("contact")->row_array();
        $data["social"] = $this->db->get("social")->row_array();
        $data["partners"] = $this->db->order_by("id", "desc")->get("partners")->result_array();
        //hamisinda cagirilacaqlar

        $search_text = $this->input->post('search');

        if (!empty($search_text)) {
            //search query
            $this->db->select('*');
            $this->db->from('news');
            if ($search_text != '') {
                $this->db->like("title_$lang", $search_text);
                $this->db->or_like("desc_$lang", $search_text);
            }

            $query = $this->db->get();

            $data["news"] = $query->result_array();
            $data["value"] = $search_text;
        }else{
            $data["news"] = array();
            $data["value"] = $search_text;
        }

        $data["page"] = "search/index";
        $this->load->view('front/includes/index', $data);
    }

}