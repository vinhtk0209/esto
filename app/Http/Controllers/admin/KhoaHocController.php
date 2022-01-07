<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\BaiHoc;
use App\Models\DanhMuc;
use App\Models\KhoaHoc;
use App\Models\DanhMucCon;
use App\Models\HoaDon;
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
        if (session('login')->LOAITK == 2)
            $khoahoc = KhoaHoc::where('MAGV', session('login')->ID)
                ->orderBy('MAKH', 'desc')->paginate(10);
        else $khoahoc = KhoaHoc::orderBy('MAKH', 'desc')->paginate(10);
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
        $this->validate(
            $request,
            [
                'TENKH' => 'unique:KhoaHoc,TENKH|min:10|max:100'
            ],
            [
                'TENKH.unique' => 'Tên khóa học đã tồn tại',
                'TENKH.min' => 'Tên khóa học phải có độ dài từ 10 đến 100 ký tự',
                'TENKH.max' => 'Tên khóa học phải có độ dài từ 10 đến 100 ký tự'
            ]
        );

        $khoahoc = new KhoaHoc();
        $khoahoc->TENKH = $request->TENKH;
        $khoahoc->DONGIA = $request->DONGIA;
        $khoahoc->MADM = $request->MADM;
        if (session('login')->LOAITK == 2)
            $khoahoc->MAGV = session('login')->ID;
        else $khoahoc->MAGV = $request->MATK;
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
            while (file_exists("./user/assets/imgCourse/" . $hinh)) {
                $hinh = Str::random(4) . "_" . $name;
            }
            $file->move("./user/assets/imgCourse/", $hinh);
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
            while (file_exists("./user/assets/imgCourse/" . $image)) {
                $image = Str::random(4) . "_" . $name;
            }
            $file->move("./user/assets/imgCourse/", $image);
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
        if (session('login')->LOAITK == 2)
            $khoahoc->MAGV = session('login')->ID;
        else $khoahoc->MAGV = $request->MATK;
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
            while (file_exists("./user/assets/imgCourse/" . $hinh)) {
                $hinh = Str::random(4) . "_" . $name;
            }
            $file->move("./user/assets/imgCourse/", $hinh);
            $khoahoc->ANH = $hinh;
        }
        $khoahoc->save();

        return redirect('admin/khoahoc/sua/' . $id)->with('thongbao', 'Sửa thành công!');
    }

    public function delete($id)
    {
        $khoahoc = KhoaHoc::find($id);
        $hoadon = HoaDon::where('MAKH', $id)->get();
        if (!$hoadon) {
            $khoahoc->delete();
            return redirect('admin/khoahoc/')->with('thongbao', 'Xóa thành công!');
        } else
            return redirect('admin/khoahoc/')->with('thongbao', 'Khóa học đã có người mua.\n Không thể xóa khóa học này!');
    }

    public function search(Request $request)
    {
        $outputKH = 'none';
        $outputPage = 'all';
        if (empty($request->keyword)) $khoahoc = DB::table('KhoaHoc')
            ->join('DanhMuc', 'DanhMuc.MADM', '=', 'KhoaHoc.MADM')
            ->orderBy('MAKH', 'desc')->paginate(10);
        else {
            $khoahoc = DB::table('KhoaHoc')
                ->join('DanhMuc', 'DanhMuc.MADM', '=', 'KhoaHoc.MADM')
                ->join('TaiKhoan', 'TaiKhoan.ID', '=', 'KhoaHoc.MAGV')
                ->where('TENKH', 'LIKE', '%' . $request->keyword . '%')
                ->orWhere('TENDM', 'LIKE', '%' . $request->keyword . '%')
                ->orWhere('HOTEN', 'LIKE', '%' . $request->keyword . '%')
                ->orWhere('DONGIA', '<=', $request->keyword)
                ->orderBy('MAKH', 'desc')->get();
            $outputPage = 'none';
        }
        foreach ($khoahoc as $kh) {
            $outputKH .= '<tr>
                                        <th scope="row">
                                            <div class="media align-items-center">
                                                <img src="./user/assets/imgCourse/' . $kh->ANH . '" width="90px" height="50px">
                                            </div>
                                        </th>
                                        <td class="budget">
                                        ' . substr($kh->TENKH, 0, 30) . '
                                        </td>
                                        <td class="budget">
                                        ' . $kh->DONGIA . '
                                        </td>
                                        <td class="budget">
                                        ' . substr($kh->GIOITHIEUKH, 0, 50) . '
                                        </td>
                                        <td class="budget">
                                        ' . $kh->TENDM . '
                                        </td>
                                        <td class="budget">
                                        ' . ($kh->TRUCTUYEN == 1 ? 'Trực tuyến' : 'Video') . '
                                        </td>
                                        <td class="budget">
                                        <a href="admin/khoahoc/sua/' . $kh->MAKH . '" class="btn btn-sm btn-neutral edit text-yellow" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                        <a href="admin/khoahoc/xoa/' . $kh->MAKH . '" class="btn btn-sm btn-neutral delete text-red" title="Delete" data-toggle="tooltip" onclick="return confirm(' . "Bạn có muốn xóa mục này?" . ')"><i class="material-icons">&#xE872;</i></a>
                                        </td>
                                    </tr>';
        }
        $outputKH = mb_convert_encoding($outputKH, "UTF-8", "auto");
        $output = array($outputKH, $outputPage);
        return response()->json($output);
    }
}
