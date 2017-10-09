<?php
class ControllerCustomDateformat extends Controller {
    public function index($now)
    {
        $this->language->load('custom/dateformat');

        $raw_date = strtotime($now);
        $year = date('Y', $raw_date);
        $month = date('m', $raw_date);
        $day = date('d', $raw_date);
        switch ($month) {
            case '01':
                $full_m = $this->language->get('text_january');
                break;
            case '02':
                $full_m = $this->language->get('text_february');
                break;
            case '03':
                $full_m = $this->language->get('text_march');
                break;
            case '04':
                $full_m = $this->language->get('text_april');
                break;
            case '05':
                $full_m = $this->language->get('text_may');
                break;
            case '06':
                $full_m = $this->language->get('text_june');
                break;
            case '07':
                $full_m = $this->language->get('text_july');
                break;
            case '08':
                $full_m = $this->language->get('text_august');
                break;
            case '09':
                $full_m = $this->language->get('text_september');
                break;
            case '10':
                $full_m = $this->language->get('text_october');
                break;
            case '11':
                $full_m = $this->language->get('text_november');
                break;
            case '12':
                $full_m = $this->language->get('text_december');
                break;
        }
        return $day . ' ' . $full_m . ' ' . $year;
    }
}
?>
