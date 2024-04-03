<?php

namespace App\Form;

use App\Entity\ExpensesCategory;

trait ExpensesCategoryChoiceLabelTrait
{
    public function getExpensesCategoryChoiceLabel(ExpensesCategory $category): string
    {
        $categoryName = $category->getCategoryName();
        return $categoryName ?: '(no category)';
    }
}

?>