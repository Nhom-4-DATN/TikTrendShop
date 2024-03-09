<?php

namespace App\View\Components\form;

use App\Repository\CategoryBlog\CategoryRepository;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormCategoryBlog extends Component
{
    /**
     * Create a new component instance.
     */
    protected $categoryRepository;
    protected $categoryBlogDetail;
    public function __construct($categoryBlogDetail = null)
    {
        $this->categoryRepository = new CategoryRepository();
        $this->categoryBlogDetail = $categoryBlogDetail;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $categoryBlogList = $this->categoryRepository->getAllToMe(0, [optional($this->categoryBlogDetail)->id]);
        return view('components.form.form-category-blog', ['categoryBlogList' => $categoryBlogList, 'categoryBlog' => $this->categoryBlogDetail]);
    }
}
