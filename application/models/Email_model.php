<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Email_model extends CI_Model {

    public function sendEmail($users, $subject, $message) {
        
        $this->load->library('email');
        
        $config['useragent'] = 'ListsBot';
        $config['protocol'] = 'mail';
        $config['mailtype'] = 'html';

        $this->email->initialize($config);
        $this->email->subject($subject);

        $this->email->from('tarmeeztest@gmail.com', 'Test');
        $this->email->reply_to('tarmeeztest@gmail.com', 'Noreply');

        $this->email->message($message);
        $this->email->to($users);

        $res = $this->email->send();

        $status = $this->email->send() ? 'okey' : 'fail';
        
        return $status;
    }

}

