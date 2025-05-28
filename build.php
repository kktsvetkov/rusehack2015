<?php (new class
{
	private array $photos = [];

	function read_media(): self
	{
		$original_dir = $this->html_dir() . '/media/original/';

		$photos = scandir($original_dir);
		$photos = array_slice($photos, 2);

		foreach ($photos as $photo)
		{
			$src = $original_dir . $photo;
			$this->photos[] = [
				$this->html_media_url() . 'original/' . $photo,
				$this->create_media_preview($src),
				$this->extract_datetime($src)
			];
		}

		return $this;
	}

	function generate_html(): void
	{
		ob_start();
		include __DIR__ . '/include.index.php';
		$html = ob_get_clean();

		file_put_contents($this->html_dir() . '/index.html', $html);
		return;
	}

	private function html_dir(): string
	{
		return __DIR__ . '/html';
	}

	private function html_media_url(): string
	{
		return 'media/';
	}

	private function create_media_preview(string $original): string
	{
		$name = basename($original);
		$preview_dir = $this->html_dir() . '/media/preview/';
		$preview_url = $this->html_media_url() . 'preview/' . $name;

		$image = $preview_dir . $name;
		if (!is_file($image))
		{
			shell_exec('convert -resize 640X480 '
				. escapeshellarg($original) . ' '
				. escapeshellarg($image)
			);
		}

		return $preview_url;
	}

	private function extract_datetime(string $original): string
	{
		return exif_read_data($original)['DateTime'];
	}

	private function youtube_embed(string $id, string $title): string
	{
		return '<iframe width="560" height="315" src="https://www.youtube.com/embed/' . $id . '"
		title="' . $title . '" frameborder="0"
		allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
		referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>';
	}

})->read_media()->generate_html();
