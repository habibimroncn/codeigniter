<?php 

class Fb_model extends CI_Model {

/*
	public $title;
    public $content;
    public $date;
*/
    public $ID;

	 public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

	 public function insert_data($id_fb, $name, $email, $imagelink)
        {

        	    $date_time          = date('Y-m-d H:i:s');
                $this->ID           = '';
                $this->id_fb        = $id_fb; // please read the below note
                $this->name         = $name;
                $this->email        = $email;
                $this->image_link   = $imagelink;
                $this->date         = $date_time;


               $this->db->select('*');
               $this->db->from('account_fb');
     	       $this->db->where('email', $this->email);
     	       $query = $this->db->get();

     	       if ($query->num_rows() > 0 ) {
     	       	# code...
     	       }
     	       else {
     	       	 $this->db->insert('account_fb', $this);
     	       }
     	       

                //$this->db->insert('account_fb', $this);
        }


}