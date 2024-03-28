<?php

namespace App\View\Components\sidebar;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Stores;
use Illuminate\Support\Facades\Auth;

class SidebarManagerStoresMenus extends Component
{
    /**
     * Create a new component instance.
     */
    protected $storeModel;
    public function __construct()
    {
        $this->storeModel = new Stores();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $menus = [
            [
                'title' => 'Quản lý sản phẩm',
                'icon' => '',
                'url' => '',
                'id' => 1,
                'children' => [
                    [
                        'title' => 'Tất cả',
                        'icon' => '',
                        'url' => '',
                    ],
                    [
                        'title' => 'tạo sản phẩm',
                        'icon' => '',
                        'url' => '',
                    ]
                ]
            ],
            [
                'id' => 2,
                'title' => 'quản lý hóa đơn',
                'icon' => '',
                'url' => '',
                'children' => [
                    [
                        'title' => 'Biểu đồ ',
                        'icon' => '',
                        'url' => route('order.manager.chart'),
                    ],
                    [
                        'title' => 'Đơn hàng',
                        'icon' => '',
                        'url' => route("order.manager.index"),
                    ],
                    [
                        'title' => 'đơn hàng đã hủy',
                        'icon' => '',
                        'url' => '',
                    ]
                ]
            ],
            [
                'id' => 3,
                'title' => 'Quản lý bài đăng',
                'icon' => '',
                'url' => '',
                'children' => [
                    [
                        'title' => 'Tất cả',
                        'icon' => '',
                        'url' => Route('manager.blog.index'),
                    ],
                    [
                        'title' => 'Tạo bài đăng',
                        'icon' => '',
                        'url' => Route('manager.blog.create'),
                    ],
                    [
                        'title' => 'danh mục bài đăng',
                        'icon' => '',
                        'url' => Route('manager.category-blog.index'),
                    ]
                ]
            ],
            [
                'id' => 4,
                'title' => 'Quản lý vorcher',
                'icon' => '',
                'url' => '',
                'children' => [
                    [
                        'title' => 'Tất cả',
                        'icon' => '',
                        'url' => '',
                    ],
                    [
                        'title' => 'tạo vorcher',
                        'icon' => '',
                        'url' => '',
                    ]
                ]
            ],
            [
                'id' => 5,
                'title' => 'thiết lập',
                'icon' => '',
                'url' => '',
                'children' => [
                    [
                        'title' => 'Vị trí',
                        'icon' => '',
                        'url' => route('manager.locations'),
                    ],
                    [
                        'title' => 'đơn hàng đã hủy',
                        'icon' => '',
                        'url' => '',
                    ]
                ]
            ],
            [
                'id' => 5,
                'title' => 'Giao hàng',
                'icon' => '',
                'url' => '',
                'children' => [
                    [
                        'title' => 'Đơn hàng',
                        'icon' => '',
                        'url' => route('order.manager.list'),
                    ],
                    [
                        'title' => 'Cập nhập Giao hàng',
                        'icon' => '',
                        'url' => route('order.manager.delivery'),
                    ]
                ]
            ],
        ];
        return view('components.sidebar.sidebar-manager-stores-menus', ['menus' => $menus]);
    }
}
