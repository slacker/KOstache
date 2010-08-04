<?php

class View_UsingLayout extends View_Layout
{
	public function thing()
	{
		return new Model_Test($this->thing_id);
	}
}