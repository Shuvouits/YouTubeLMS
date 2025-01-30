<?php


namespace App\Repositories;

use App\Models\SubCategory;

class SubCategoryRepository
{

    // New findSubCategory function
    public function findSubCategory($id)
    {
        return SubCategory::find($id);
    }


    public function saveSubCategory($data)
    {
       $sub_category = new SubCategory();

        // Save the intro
        $sub_category->create($data);

        return $sub_category;
    }

    public function updateSubCategory($data, $id)
    {
        $sub_category = $this->findSubCategory($id);

        $sub_category->update($data);

        return $sub_category;
    }
}
