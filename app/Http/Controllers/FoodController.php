<?php

namespace App\Http\Controllers;

use App\Models\FoodModel;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class FoodController extends Controller
{

    public function index(){
        $breadcrumb = (object)[
            'title' => 'Daftar food',
            'list' => ['Home', 'food']
        ];

        $page = (object)[
            'title' => 'Daftar food yang terdaftar dalam sistem'
        ];

        $activeMenu = 'food';

        // $food = foodModel::all();

        return view('admin.food.index', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu]);
    }

    public function list(Request $request){
        $foods = FoodModel::select('food_id', 'food_kode', 'food_nama');
                    
        // if ($request->food_id) {
        //     $foods->where('food_id', $request->food_id);
        // }

        return DataTables::of($foods)
            // ->addIndexColumn()
            ->addColumn('aksi', function ($food) {  // menambahkan kolom aksi 
                $btn = '<a href="'.url('/admin/food/' . $food->food_id . '/edit').'" class="btn btn-warning btn-sm">Edit</a> '; 
                $btn .= '<form class="d-inline-block" method="POST" action="'. 
                        url('/admin/food/'.$food->food_id).'">' 
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
            'title' => 'Tambah food',
            'list'  => ['Home', 'food', 'Tambah']
        ];

        $page = (object)[
            'title' => 'Tambah food baru'
        ];

        $food = foodModel::all();
        $activeMenu = 'food';

        return view('admin.food.create', ['breadcrumb' => $breadcrumb, 'page' => $page, 'food' => $food, 'activeMenu' => $activeMenu]);
    }

    public function store(Request $request){
        try {
            $request->validate([
                'food_kode' => 'required|string|min:3|unique:foods,food_kode',
                'food_nama' => 'required|string|max:100',
            ]);
    
            foodModel::create([
                'food_kode' => $request->food_kode,
                'food_nama' => $request->food_nama,
            ]);
            return redirect('/admin/food')->with('success', 'Data food berhasil disimpan');
        } catch (\Throwable $th) {
            return redirect('/admin/food')->with('error', 'Data food gagal disimpan');
            //throw $th;
        }

    }

    public function show(String $id){
        $food = FoodModel::find($id);

        $breadcrumb = (object)[
            'title' => 'Detail food',
            'list' => ['Home', 'food', 'Detail'],
        ];

        $page = (object)[
            'title' => 'Detail food'
        ];

        $activeMenu = 'food';

        return view('admin.food.show', ['breadcrumb' => $breadcrumb, 'page' => $page, 'food' => $food, 'activeMenu' => $activeMenu]);
    }

    public function edit(String $id){
        $food = FoodModel::find($id);

        $breadcrumb = (object)[
            'title' => 'Edit food',
            'list' => ['Home', 'food', 'Edit']
        ];

        $page = (object)[
            'title' => 'Edit food'
        ];

        $activeMenu = 'food';

        return view('admin.food.edit', ['breadcrumb' => $breadcrumb, 'page' => $page, 'food' => $food, 'activeMenu' => $activeMenu]);
    }

    public function update(Request $request, String $id){
        $request->validate([
            'food_kode' => 'required|string|min:3|unique:foods,food_kode,' . $id . ',food_id',
            'food_nama' => 'required|string|max:100',
        ]);

        FoodModel::find($id)->update([
            'food_kode' => $request->food_kode,
            'food_nama' => $request->food_nama,
        ]);

        return redirect('/admin/food')->with('success', 'Data food berhasil diubah');
    }

    public function destroy(String $id){
        $check = FoodModel::find($id);
        if (!$check) {
            return redirect('admin/food')->with('error', 'Data food tidak ditemukan');
        }

        try {
            FoodModel::destroy($id);
            return redirect('admin/food')->with('success', 'Data food berhasil dihapus');
        }catch(\Illuminate\Database\QueryException $e) {
            return redirect('admin/food')->with('error', 'Data food gagal dihapus karena masih terdapat tabel lain yang terkait dengan data ini');
        }
    }
}