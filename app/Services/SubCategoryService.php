<?php

namespace App\Services;

use App\Repositories\SubCategoryRepository;

class SubCategoryService
{


    protected $subCategoryRepository;

    public function __construct(SubCategoryRepository $subCategoryRepository)
    {
        $this->subCategoryRepository = $subCategoryRepository;
    }


    public function saveSubCategory(array $data)
    {
        return $this->subCategoryRepository->saveSubCategory($data);

    }

    public function updateSubCategory(array $data, $id)
    {
        return $this->subCategoryRepository->updateSubCategory($data, $id);

    }


}
