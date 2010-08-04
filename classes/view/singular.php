<?php

class View_Singular extends Kostache
{
	public $thing_id = NULL;
	public $title = 'Testing';

	public function thing()
	{
		return new Model_Test($this->thing_id);
	}
}