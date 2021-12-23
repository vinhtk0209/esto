<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\BaiHoc;
use App\Models\DanhMuc;
use App\Models\KhoaHoc;
use App\Models\DanhMucCon;
use App\Models\LopHoc;
use App\Models\LopHoc_BaiHoc;
use App\Models\TaiKhoan;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class KhoaHocController extends Controller
{
    public function index()
    {
        $khoahoc = KhoaHoc::orderBy('MAKH', 'desc')->paginate(10);
        return view('admin.khoahoc.index', ['khoahoc' => $khoahoc]);
    }

    public function create()
    {
        $danhmuc = DanhMuc::where('MADMCHA', '>', 0)->get();
        $taikhoan = TaiKhoan::where('LOAITK', '=', 2)->get();
        return view('admin.khoahoc.create', compact('danhmuc', 'taikhoan'));
    }

    public function store(Request $request)
    {
        $khoahoc = new KhoaHoc();
        $khoahoc->TENKH = $request->TENKH;
        $khoahoc->DONGIA = $request->DONGIA;
        $khoahoc->MADM = $request->MADM;
        $khoahoc->MAGV = $request->MATK;
        if ($request->hinhthuc == '1') {

            $khoahoc->TRUCTUYEN = true;
        } else {

            $khoahoc->TRUCTUYEN = false;
        }
        $khoahoc->GIOITHIEUKH = $request->GIOITHIEUKH;
        $khoahoc->CHITIETKH = $request->CHITIETKH;
        if ($request->hasFile('ANH')) {
            $file = $request->file('ANH');
            $name = $file->getClientOriginalName();
            $hinh = Str::random(4) . "_" . $name;
            while (file_exists("public/user/assets/imgCourse/" . $hinh)) {
                $hinh = Str::random(4) . "_" . $name;
            }
            $file->move("public/user/assets/imgCourse/", $hinh);
            $khoahoc->ANH = $hinh;
        } else {
            $khoahoc->ANH = "";
        }
        $khoahoc->save();

        if (session('baihoc')) {
            $data =  session('baihoc');
            for ($i = 0; $i < count($data); $i = $i + 3) {
                $baihoc = new BaiHoc();
                $baihoc->MAKH = $khoahoc->MAKH;
                $baihoc->TENBH = $data[$i];
                $baihoc->VIDEO = $data[$i + 1];
                $baihoc->HOCTHU = $data[$i + 2];
                $baihoc->save();
            }
        }
        session()->forget('baihoc');
        return redirect('admin/khoahoc/them')->with('thongbao', 'Thêm khóa học thành công!');
    }

    public function storeBaiHoc(Request $request)
    {
        if (session('baihoc')) {
            $baihoc =  session('baihoc');
            array_push($baihoc, $request->TENBH, $request->VIDEO, $request->HOCTHU);
            session(['baihoc' => $baihoc]);
        } else {
            $baihoc = array($request->TENBH, $request->VIDEO, $request->HOCTHU);
            session(['baihoc' => $baihoc]);
        }

        $video = "";
        if ($request->hasFile('VIDEO')) {
            $file = $request->file('VIDEO');
            $name = $file->getClientOriginalName();
            $image = Str::random(4) . "_" . $name;
            while (file_exists("public/user/assets/imgCourse/" . $image)) {
                $image = Str::random(4) . "_" . $name;
            }
            $file->move("public/user/assets/imgCourse/", $image);
            $video = $image;
        }

        $output = '<tr>
                    <td class="budget">
                        ' . $request->TENBH . '
                    </td>
                    <td class="budget">
                        ' . $video . '
                    </td>
                    <td class="budget">
                        ' . $request->HOCTHU . '
                    </td>
                    </tr>';

        return response()->json($output);
    }

    public function edit($id)
    {
        $danhmuc = DanhMuc::where('MADMCHA', '>', 0)->get();
        $khoahoc = KhoaHoc::find($id);
        $taikhoan = TaiKhoan::where('LOAITK', '=', 2)->get();
        return view('admin.khoahoc.edit', compact('danhmuc', 'khoahoc', 'taikhoan'));
    }

    public function update(Request $request, $id)
    {
        $khoahoc = KhoaHoc::find($id);
        $khoahoc->TENKH = $request->TENKH;
        $khoahoc->DONGIA = $request->DONGIA;
        $khoahoc->MAGV = $request->MATK;
        $khoahoc->MADM = $request->MADM;
        if ($request->hinhthuc == '1') {

            $khoahoc->TRUCTUYEN = true;
        } else {

            $khoahoc->TRUCTUYEN = false;
        }
        $khoahoc->GIOITHIEUKH = $request->GIOITHIEUKH;
        $khoahoc->CHITIETKH = $request->CHITIETKH;
        if ($request->hasFile('ANH')) {
            $file = $request->file('ANH');
            $name = $file->getClientOriginalName();
            $hinh = Str::random(4) . "_" . $name;
            while (file_exists("public/user/assets/imgCourse/" . $hinh)) {
                $hinh = Str::random(4) . "_" . $name;
            }
            $file->move("public/user/assets/imgCourse/", $hinh);
            $khoahoc->ANH = $hinh;
        }
        $khoahoc->save();

        return redirect('admin/khoahoc/sua/' . $id)->with('thongbao', 'Sửa thành công!');
    }

    public function delete($id)
    {
        $khoahoc = KhoaHoc::find($id);
        $khoahoc->delete();

        return redirect('admin/khoahoc/')->with('thongbao', 'Xóa thành công!');
    }

    public function search(Request $request)
    {
        if ($request->ajax()) {
            $output = '';

            if (empty($request->keyword)) $products = KhoaHoc::all();
            else $products = KhoaHoc::where('TENKH', 'LIKE', '%' . $request->keyword . '%')->get();
            if ($products) {
                foreach ($products as $key => $product) {
                    $output .= '<tr>
                                        <th scope="row">
                                            <div class="media align-items-center">
                                                <img src="public/user/assets/imgCourse/' . $product->ANH . '" width="90px" height="50px">
                                            </div>
                                        </th>
                                        <td class="budget">
                                        ' . substr($product->TENKH, 0, 30) . '
                                        </td>
                                        <td class="budget">
                                        ' . $product->DONGIA . '
                                        </td>
                                        <td class="budget">
                                        ' . substr($product->GIOITHIEUKH, 0, 50) . '
                                        </td>
                                        <td class="budget">
                                        ' . $product->rDanhMuc->TENDM . '
                                        </td>
                                        <td class="budget">
                                        ' . ($product->TRUCTUYEN == 1 ? 'Trực tuyến' : 'Video') . '
                                        </td>
                                        <td class="center">
                                            <a href="admin/khoahoc/sua/{{$product->MAKH}}" class="edit text-yellow" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                            <a href="admin/khoahoc/xoa/{{$product->MAKH}}" class="delete text-red" title="Delete" data-toggle="tooltip" ><i class="material-icons">&#xE872;</i></a>
                                        </td>
                                    </tr>';
                }
            }

            return response()->json($output);
        }
    }
}
