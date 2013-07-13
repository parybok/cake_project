<?php
class ReferenceController extends AppController {
	public $name = 'Reference';
	public $uses = array();
function index() {
	 $this->set('alphabets',array('','A','Б','В','Г','Д','Е','Ж','З','І','К','Л','М','Н','О','П','Р','С','Т','У','Ф','Х','Ц','Ч','Ш','Щ','Ю','Я','A-Z'));
}

}
