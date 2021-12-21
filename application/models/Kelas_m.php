<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas_m extends CI_Model {

    public static $pk = 'idkelas';

    public static $table = 'kelas';

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }
    public function getData()
    {
        return $this->db->get(self::$table)->result();
    }
    public function graph()
	{
        return $this->db->get(self::$table)->result();
	}

    public function getDataByKelas($tahun_akademik,$semester,$kelas_kd)
    {
        $mapel = $this->db->select('idmapel,idkelas')
        ->where('kelas_kd',$kelas_kd)
        ->get('kelas')->row();
        $idkelas = $mapel->idkelas;
        return $this->db->select('x1.nama,x.idkelas,x2.kelas_kd,x2.kelas_nama,x.kkm')
        ->join('guru x1', 'x1.idguru = x.idguru', 'left')
        ->join('kelas x2', 'x2.idkelas = x.idkelas', 'left')
        ->where(['x.idtahun_akademik'=>$tahun_akademik,'x.semester'=>$semester,'x.idkelas'=>$idkelas])
        ->get(self::$table.' x')->row();
        
    }
}

/* End of file Kelas_m.php */