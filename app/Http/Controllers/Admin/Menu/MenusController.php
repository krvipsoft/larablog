<?php

namespace App\Http\Controllers\Admin\Menu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Admin\Menu\MenusRepository;

class MenusController extends Controller
{

    protected $menusRepository;

    public function __construct(MenusRepository $menusRepository)
    {
        $this->menusRepository = $menusRepository;
    }

    public function index()
    {
        $data = $this->menusRepository->index();
        dump($data);die;
        return view('admin.layouts.sapp');
    }

}
