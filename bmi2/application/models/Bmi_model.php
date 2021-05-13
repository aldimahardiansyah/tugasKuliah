<?php
class Bmi_model extends CI_Model
{
    public $berat;
    public $tinggi;

    public function nilaiBMI()
    {
        $tinggi_meter = $this->tinggi / 100;
        $bmi = $this->berat / pow($tinggi_meter, 2);
        return $bmi;
    }
    public function statusBMI()
    {
        if ($this->nilaiBMI() < 18.5) {
            return "Kekurangan Berat Badan";
        } else if ($this->nilaiBMI() < 25.0) {
            return "Normal (Ideal)";
        } else if ($this->nilaiBMI() < 30.0) {
            return "Kelebihan Berat Badan";
        } else {
            return "Kegemukan (Obesitas)";
        }
    }
}