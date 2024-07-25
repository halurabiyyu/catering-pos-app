<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class KategoriController extends Controller
{
    public function index(){
        $breadcrumb = (object)[
            'title' => 'Daftar Kategori',
            'list' => ['Home', 'Kategori']
        ];

        $page = (object)[
            'title' => 'Daftar Kategori yang terdaftar dalam sistem'
        ];

        $activeMenu = 'kategori';

        // $kategori = CategoryModel::all();

        return view('admin.kategori.index', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu]);
    }

    public function list(Request $request){
        $categorys = CategoryModel::select('category_id', 'category_code', 'category_name');
                    
        // if ($request->kategori_id) {
        //     $kategoris->where('kategori_id', $request->kategori_id);
        // }

        return DataTables::of($categorys)
            // ->addIndexColumn()
            ->addColumn('aksi', function ($category) {  // menambahkan kolom aksi 
                $btn = '<a href="'.url('/admin/kategori/' . $category->category_id . '/edit').'" class="btn btn-warning btn-sm">Edit</a> '; 
                $btn .= '<form class="d-inline-block" method="POST" action="'. 
                        url('/admin/kategori/'.$category->category_id).'">' 
                        . csrf_field() . method_field('DELETE') .  
                        '<button type="submit" class="btn btn-danger btn-sm" 
                        onclick="return confirm(\'Apakah Anda yakit menghapus data 
                        ini?\');">Hapus</button></form>';      
                return $btn; 
            }) 
            ->rawColumns(['aksi']) // memberitahu bahwa kolom aksi adalah html 
            ->make(true);
    }

    public function create(){
        $breadcrumb = (object)[
            'title' => 'Tambah Kategori',
            'list'  => ['Home', 'Kategori', 'Tambah']
        ];

        $page = (object)[
            'title' => 'Tambah kategori baru'
        ];

        $category = CategoryModel::latest()->get();
        $activeMenu = 'kategori';

        return view('admin.kategori.create', ['breadcrumb' => $breadcrumb, 'page' => $page, 'category' => $category, 'activeMenu' => $activeMenu]);
    }

    public function store(Request $request){
        $request->validate([
            'category_code' => 'required|string|min:3|unique:category,category_code',
            'category_name' => 'required|string|max:100',
        ]);

        CategoryModel::create([
            'category_code' => $request->category_code,
            'category_name' => $request->category_name,
        ]);

        return redirect('/admin/kategori')->with('success', 'Data kategori berhasil disimpan');
    }

    public function edit(String $id){
        $category = CategoryModel::find($id);

        $breadcrumb = (object)[
            'title' => 'Edit kategori',
            'list' => ['Home', 'kategori', 'Edit']
        ];

        $page = (object)[
            'title' => 'Edit kategori'
        ];

        $activeMenu = 'kategori';

        return view('admin.kategori.edit', ['breadcrumb' => $breadcrumb, 'page' => $page, 'category' => $category, 'activeMenu' => $activeMenu]);
    }

    public function update(Request $request, $id){
        $request->validate([
            'category_code' => 'required|string|min:3|unique:kategoris,category_code,' . $id . ',kategori_id',
            'category_name' => 'required|string|max:100',
        ]);

        CategoryModel::find($id)->update([
            'category_code' => $request->category_code,
            'category_name' => $request->category_name,
        ]);

        return redirect('/admin/kategori')->with('success', 'Data kategori berhasil diubah');
    }

    public function destroy(String $id){
        $check = CategoryModel::find($id);
        if (!$check) {
            return redirect('admin/kategori')->with('error', 'Data kategori tidak ditemukan');
        }

        try {
            CategoryModel::destroy($id);
            return redirect('admin/kategori')->with('success', 'Data kategori berhasil dihapus');
        }catch(\Illuminate\Database\QueryException $e) {
            return redirect('admin/kategori')->with('error', 'Data kategori gagal dihapus karena masih terdapat tabel lain yang terkait dengan data ini');
        }
    }
}

