<?php
class Train extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function insert1($data)
    {
        $this->db->insert('procession', $data);
    }

    function insert2($data1)
    {
        $this->db->insert('theorigin', $data1);
    }

    function insert3($data2)
    {
        $this->db->insert('huayrach', $data2);
    }

    function insert4($data3)
    {
        $this->db->insert('destination', $data3);
    }

    function show()
    {
        $result = $this->db->select('*')
            ->from('procession')

            ->join('theorigin', 'theorigin.id = procession.id')
            ->join('huayrach', 'huayrach.id = procession.id')
            ->join('destination', 'destination.id = procession.id')

        ->order_by('ittime', 'asc') 
        ->get();
        return $result;
    }
}
