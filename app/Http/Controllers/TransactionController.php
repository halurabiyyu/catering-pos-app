<?php

namespace App\Http\Controllers;

use App\Models\CartModel;
use App\Models\DetailTransactionModel;
use App\Models\TransactionModel;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class TransactionController extends Controller
{
    public function index() {
        $breadcrumb = (object)[
            'title' => 'Daftar Transaksi',
            'list' => ['Home', 'Transaction']
        ];

        $page = (object)[
            'title' => 'Daftar transaksi'
        ];

        $activeMenu = 'transaction';
        return view('admin.transaction.index', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu]);
    }

    public function list(Request $request){
        $transactions = TransactionModel::latest()->select('created_at', 'transaction_id', 'user_id', 'total_harga', 'status')
                    ->with('user');


        // if ($request->level_id) {
        //     $users->where('level_id', $request->level_id);
        // }

        return DataTables::of($transactions)
            ->addIndexColumn()
            ->addColumn('aksi', function ($transaction) {  // menambahkan kolom aksi 
                $btn  = '<a href="'.url('/admin/transaction/' . $transaction->transaction_id).'" class="btn btn-info btn-sm">Detail</a> '; 
                $btn .= '<a href="'.url('/admin/transaction/' . $transaction->transaction_id . '/edit').'" class="btn btn-warning btn-sm">Edit</a> '; 
                $btn .= '<form class="d-inline-block" method="POST" action="'. 
                        url('/admin/transaction/'.$transaction->transaction_id).'">' 
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
            'title' => 'Tambah User',
            'list'  => ['Home', 'User', 'Tambah']
        ];

        $page = (object)[
            'title' => 'Tambah user baru'
        ];

        // $level = LevelModel::all();
        $activeMenu = 'user';

        return view('admin.user.create', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu]);
    }

    public function store(Request $request){
        $request->validate([
            'email' => 'required|email',
            'username' => 'required|string|min:3|unique:users,username',
            'nama' => 'required|string|max:100',
            'password' => 'required|min:5',
            'level_id' => 'required|integer',
        ]);

        TransactionModel::create([
            'email' => $request->email,
            'username' => $request->username,
            'nama' => $request->nama,
            'password' => bcrypt($request->password),
            'level_id' => $request->level_id,
        ]);

        return redirect('admin/user')->with('success', 'Data user berhasil disimpan');
    }

    public function show(String $id){
        try {
            $transaction = DetailTransactionModel::where('transaction_id', $id)->with('food')->get();
            // dd($transaction);
            if (!$transaction) {
                $this->index();   
            }
            $breadcrumb = (object)[
                'title' => 'Detail Transaction',
                'list' => ['Home', 'Transaction', 'Detail'],
            ];
    
            $page = (object)[
                'title' => 'Detail Transaksi'
            ];
    
            $activeMenu = 'transaksi';
    
            return view('admin.transaction.show', ['breadcrumb' => $breadcrumb, 'page' => $page, 'transaction' => $transaction, 'activeMenu' => $activeMenu]);
        } catch (Exception $e) {
            return view('errors::404');
        }
    }

    public function edit(String $id){
        $user = TransactionModel::find($id);
        // $level = LevelModel::all();

        $breadcrumb = (object)[
            'title' => 'Edit User',
            'list' => ['Home', 'User', 'Edit']
        ];

        $page = (object)[
            'title' => 'Edit User'
        ];

        $activeMenu = 'user';

        return view('admin.user.edit', ['breadcrumb' => $breadcrumb, 'page' => $page, 'user' => $user, 'activeMenu' => $activeMenu]);
    }

    public function update(Request $request, String $id){
        $request->validate([
            'email' => 'required|email',
            'username' => 'required|string|min:3|unique:users,username,' . $id . ',user_id',
            'nama' => 'required|string|max:100',
            'password' => 'nullable|min:5',
            'level_id' => 'required|integer',
        ]);

        TransactionModel::find($id)->update([
            'email' => $request->email,
            'username' => $request->username,
            'nama' => $request->nama,
            'password' => $request->password ? bcrypt($request->password) : TransactionModel::find($id)->password,
            'level_id' => $request->level_id,
        ]);

        return redirect('admin/user')->with('success', 'Data user berhasil diubah');
    }

    public function destroy(String $id){
        $check = TransactionModel::find($id);
        if (!$check) {
            return redirect('admin/user')->with('error', 'Data user tidak ditemukan');
        }

        try {
            TransactionModel::destroy($id);
            return redirect('admin/user')->with('success', 'Data user berhasil dihapus');
        }catch(\Illuminate\Database\QueryException $e) {
            return redirect('admin/user')->with('error', 'Data user gagal dihapus karena masih terdapat tabel lain yang terkait dengan data ini');
        }
    }

    public function userShowTransaction() {
        $userId = Auth::id();
        $countCart = $this->countCart();
        $transaction = TransactionModel::where('user_id', $userId)->latest()->get();
        return view('customer.transaction', ['transaction' => $transaction, 'countCart' => $countCart]);
    }

    public function countCart() {
        if (Auth::user()) {
            $user = Auth::user();
            $carts = CartModel::with('food')->where('user_id', $user->user_id)->get();
            $countCart = count($carts);
            return $countCart;
        }
    }
}
