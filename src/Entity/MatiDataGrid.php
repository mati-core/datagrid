<?php

declare(strict_types=1);

namespace MatiCore\DataGrid;

use Nette\ComponentModel\IContainer;
use Ublaboo\DataGrid\DataGrid;

/**
 * Class MatiDataGrid
 * @package MatiCore\DataGrid
 */
class MatiDataGrid extends DataGrid
{

	/**
	 * MatiDataGrid constructor.
	 * @param IContainer|null $parent
	 * @param string|null $name
	 */
	public function __construct(?IContainer $parent = null, ?string $name = null)
	{
		parent::__construct($parent, $name);

		$this->setTemplateFile(__DIR__ . '/../Template/tableTemplate.latte');
	}

}