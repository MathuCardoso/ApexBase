<?php

namespace App\controller;

use Configs\App;

class ViewController
{
	private ?string $title;
	private ?array $styles;
	private ?array $js;
	private ?string $link;

	public function __construct()
	{
		$this->title = 'Projeto PHP';
		$this->link = null;
	}

	public function getTitle()
	{
		return $this->title;
	}

	public function setTitle($title)
	{
		$this->title = $title;

		return $this;
	}

	public function getStyles()
	{
		if (!empty($this->styles)) {
			foreach ($this->styles as $s) {
				if (file_exists(css($s, 1))) {
					echo "<link 
                rel='stylesheet' 
                href='" . css($s) . "'>";
				} else {
					echo 'O arquivo ' . css($s, 1) . ' Não existe!';

					return;
				}
			}
		} else {
			return;
		}
	}

	public function setStyles(array $styles = [])
	{
		$this->styles = $styles;

		return $this;
	}

	public function getJs()
	{
		if (!empty($this->js)) {
			foreach ($this->js as $j) {
				if (file_exists(js($j, 1))) {
					echo "<script 
                        src='" . js($j) . "'>
                    </script>";
				} else {
					echo 'O arquivo ' . js($j, 1) . ' Não existe!';

					return;
				}
			}
		} else {
			return;
		}
	}

	public function setJs(array $js = [])
	{
		$this->js = $js;

		return $this;
	}

	/**
	 * Get the value of Link
	 */
	public function getLink()
	{
		return $this->link;
	}

	/**
	 * Set the value of Link
	 *
	 * @return  self
	 */
	public function setLink($link)
	{
		$this->link = $link;

		return $this;
	}

	public function includeHtmlHeader()
	{
		require_once viewPath() . 'html_template/app_head.php';

		return $this;
	}

	public function includeHtmlFooter()
	{
		require_once viewPath() . 'html_template/app_footer.php';

		return $this;
	}

	public function routeIs(string $route): bool
	{
		if ($_SERVER['REQUEST_URI'] === $route) {
			return true;
		}

		return false;
	}
}
