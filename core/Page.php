<?php

/**
 * Description of Page
 *
 * @author nebjak
 */
class Page {
    
    var $id;
    var $data = array();
    
    function __construct($id) {
        $this->id = $id;
    }
    
    private function get_data() {
        $db = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
        
        $get_pages_qry = "SELECT id, title FROM pages";
        $get_page_qry = "SELECT id, title, content FROM pages WHERE id=".$this->id;
        
        $result = $db->query($get_pages_qry);
        while ($row = $result->fetch_object()) $this->data['pages'][]=$row;
        
        $result = $db->query($get_page_qry);
        $row = $result->fetch_object();
        $this->data['title'] = $row->title;
        $this->data['content'] = $row->content;        
    }


    function show() {
        $this->get_data();
        extract($this->data);
        include_once('themes/'.WEBSITE_THEME.'/theme.php');
    }
}

?>
