<?php  
class Video extends CI_Model  
{  
	protected $table = 'gallery';
	function __construct()  
	{  
         // Call the Model constructor  
		parent::__construct();  
	}

	public function uploadData($data)
	{
		$this->db->insert('gallery', $data);
	}

	public function get_count() 
	{
		return $this->db->count_all($this->table);
	}

	public function get_blog($limit, $start) 
	{
		$this->db->limit($limit, $start);
		$this->db->where('vType',0);
		$this->db->order_by("vId", "desc");
		$query = $this->db->get($this->table);

		return $query->result();
	}

	public function get_personalvid($limit, $start) 
	{
		$this->db->limit($limit, $start);
		$this->db->where('vUser',$_SESSION['UserLoginSession']['email']);
		$this->db->order_by("vId", "desc");
		$query = $this->db->get($this->table);

		return $query->result();
	}

	public function search_vid($id)
	{
		$this->db->select('*');
		$this->db->where('vId',$id);
		$this->db->from($this->table);
        //$this->db->like('username',$key);
        //$this->db->or_like('email',$key);
       // $this->db->or_like('indexno',$key);
		$query = $this->db->get();

		if($query->num_rows()>0)
		{
			return $query->result();
		}
	}

	public function updateViews($views,$id)
	{
		$this->db->set('views', $views);
		$this->db->where('vId', $id);
		$this->db->update($this->table);
	}
}
?>