<?php

namespace App\Http\Controllers;

use App\Http\Requests\SortRequest;
use App\Services\SortService;

class SortController extends Controller
{
    protected $SortService;
    protected $Test;

    public function __construct(SortService $SortService)
    {
        $this->SortService = $SortService;
    }

    public function selectSort(SortRequest $request)
    {
        $array = $request->array;
        $result = $this->SortService->selectSortDESC($array);
        return ($result);
    }

    public function findMax(SortRequest $request)
    {
        $array = $request->array;
        $result = $this->SortService->findMax($array);
        return ($result);
    }
}
