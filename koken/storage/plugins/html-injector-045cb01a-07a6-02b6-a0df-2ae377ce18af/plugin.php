<?php

class KokenHtmlInjector extends KokenPlugin {

	function __construct()
	{
		$this->register_hook('before_closing_head', 'head');
		$this->register_hook('before_closing_body', 'foot');
	}

	function head()
	{
		if (isset($this->data->header))
		{
			echo $this->data->header;
		}

	}

	function foot($data)
	{
		if (isset($this->data->footer) && !$data['lightbox'])
		{
			echo $this->data->footer;
		}

	}
}