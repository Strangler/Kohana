<?php defined('SYSPATH') OR die ('No Direct Script Access');

Class Controller_Welcome extends Controller_Template
{
    public $template = 'site';
    //public $items = array();

    public function action_index()
    {
        $results = DB::select('song', 'artist')->from('testing')->as_object()->execute();
        $this->template->items = $results;
    }
}

?>
