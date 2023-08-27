<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use App\Models\User;
use App\Traits\Fonnte;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LolosController extends Controller
{
    use Fonnte;
    public function index(Request $request)
    {
        if($request->has('search')){
            $lolos = User::where('role','user')->where('name','LIKE','%'.$request->search.'%')->paginate(5);
        }
        else{
            $lolos = Pendaftaran::where('status','lolos')->orderBy('id','desc')->paginate(5);
        }
        
        return view('pages.admin.dashboard.lolos.index',compact('lolos'));
    }

    public function pengecekan(Request $request,$id)
    {
        // dd($request->all());
        $pendaftaran = Pendaftaran::findOrFail($id);
        $data = $request->validate([
            'status' => ''
        ]);
        $pendaftaran->update($data);
        if($pendaftaran->status == 'lolos'){
            $messages = "Yey Kamu Di Nyatakan Lolos Oleh Pihak Sekolah Semalat Yah";
    
            $this->send_message($pendaftaran->user->nomor,$messages);
        }else{
            $messages = "Yah Kamu Gagal Mohon Bersabar Yah Menunggu 1Tahun Lagi";

            $this->send_message($pendaftaran->user->nomor,$messages);
        }
        return redirect()->route('admin.pendaftaran.index');
    }

    public function update(Request $request,$id)
    {
        $lolos = Pendaftaran::where('status','lolos')->findOrFail($id);
        $data = $request->validate([
            'status' => 'required'
        ]);
        $lolos->update($data);

        return redirect()->route('admin.lolos.index');
    }

    public function destroy($id)
    {
        $delete = Pendaftaran::where('status', 'lolos')->delete();
    
        return redirect()->route('admin.lolos.index');
    }
}
