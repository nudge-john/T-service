<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Json {
    /*
     * Custom Json Class
     */
    
    public $status = false; // false, true
    public $error = array(); // $code, $message
    public $data = array();    
    
    public function set_error($code)
    {
        $this->error['code'] = $code;
        switch ($code) {
            case 0:
                $this->error['message'] = 'No error';
                break;

            case 100:
                $this->error['message'] = 'Empty field';
                break;

            case 101:
                $this->error['message'] = $code.': '.lang('error_1'); // insert error
                break;

            case 102:
                $this->error['message'] = $code.': '.lang('error_1'); // select error
                break;

            case 103:
                $this->error['message'] = $code.': '.lang('error_1'); // update error
                break;

            case 104:
                $this->error['message'] = 'Email sent error';
                break;

            case 201:
                $this->error['message'] = 'Invalid secret or email';
                break;            

            case 204:
                $this->error['message'] = 'Start error';
                break;            

            case 207:
                $this->error['message'] = lang('error_2');
                break;

            case 208:
                $this->error['message'] = lang('error_3'); // Email duplicate
                break;

            case 209:
                $this->error['message'] = lang('error_4');
                break;

            case 210:
                $this->error['message'] = 'Update error';
                break;

            default:
                break;
        }

        $this->output();
    }

    public function output()
    {
        if($this->status)
        {
            unset($this->error);
        }
        else
        {
            unset($this->data);
        }
        
        exit(json_encode($this));
    }
}