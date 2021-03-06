<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Walikelas_m extends CI_Model {

    public static $pk = 'idwali_kelas';

    public static $table = 'wali_kelas';

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }
    
    public function check($data)
    {
        return $this->db->get_where(self::$table,$data);
    }
    public function getData($tahun_akademik,$semester)
    {
        return $this->db->select('x.idwali_kelas,x1.nama,x2.kelas_kd,x2.kelas_nama,x.idkelas,x.idguru')
        ->join('guru x1', 'x1.idguru = x.idguru', 'left')
        ->join('kelas x2', 'x2.idkelas = x.idkelas', 'left')
        ->where(['x.idtahun_akademik'=>$tahun_akademik,'x.semester'=>$semester])
        ->get(self::$table.' x')->result();
        
    }
    public function getById($id)
    {
        return $this->db->get_where(self::$table,[self::$pk=>$id])->row();
    }
    public function copyData($row)
    {
        $data = [
            'idtahun_akademik' => _active_years()->idtahun_akademik,
            'semester' => _active_years()->semester,
            'idkelas' => $row->idkelas,
            'idguru' => $row->idguru
        ];
        $this->db->insert(self::$table, $data);
    }

    public function getDataByKelas($tahun_akademik, $semester, $idkelas)
    {
        $wali_kelas = $this->db->select('idkelas')
        ->where('kelas_kd',$idkelas)
        ->get('kelas')->row();
        $idkelas = $wali_kelas->idkelas;
        return $this->db->select('x.idwali_kelas,x1.nama,x.idkelas,x2.kelas_kd,x2.kelas_nama')
        ->join('guru x1', 'x1.idguru = x.idguru', 'left')
        ->join('kelas x2', 'x2.idkelas = x.idkelas', 'left')
        ->join('wali_kelas x3', 'x3.idwali_kelas = x.idwali_kelas', 'left')
        ->where(['x.idtahun_akademik'=>$tahun_akademik,'x.semester'=>$semester,'x.idkelas'=>$idkelas,'x.idwali_kelas'=>$idkelas])
        ->get(self::$table.' x')->row();
    }

}

/* End of file Walikelas_m.php */