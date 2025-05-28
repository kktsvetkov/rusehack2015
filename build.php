<?php (new class
{
	function read_media(): self
	{
		return $this;
	}

	function generate_html(): void
	{
		return;
	}

})->read_media()->generate_html();
