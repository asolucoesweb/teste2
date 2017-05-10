<?php

namespace App\Traits;

class Pagination {

	public function currentPage() {
		return $_GET['page'];
	}

	public function totalPages() {
		return 20;
	}

}