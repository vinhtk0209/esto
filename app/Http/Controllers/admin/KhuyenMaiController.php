<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\KhuyenMai;
use App\Models\CTKhuyenMai;
use App\Models\KhoaHoc;
use Illuminate\Http\Request;
use Carbon\Carbon;

class KhuyenMaiController extends Controller
{
    public function index()
    {
        $khuyenmai = KhuyenMai::paginate(10);      
        return view('admin.khuyenmai.index', ['khuyenmai'=>$khuyenmai]);
    }
    
    public function create()
    {
        $khoahoc = KhoaHoc::paginate(10);
        return view('admin.khuyenmai.create', ['khoahoc'=>$khoahoc]);
    }

    public function store(Request $request)
    {        
        $khuyenmai = new KhuyenMai();              
        $khuyenmai->NGAYBD = Carbon::createFromTimestamp(strtotime($request->NGAYBD . $request->TDBD . ":00"));      
        $khuyenmai->NGAYKT = Carbon::createFromTimestamp(strtotime($request->NGAYKT . $request->TDKT . ":00"));
        $date1 = $khuyenmai->NGAYBD;
        $date2 =  $khuyenmai->NGAYKT;   
        $result = $date1->lt($date2);
        if($result)
        {
            $khuyenmai->TENKM = $request->TENKM;  
            $today = date("Y-m-d h:i:sa");
            if(strtotime($khuyenmai->NGAYBD) <=  strtotime($today) && strtotime($today) < strtotime($khuyenmai->NGAYKT))
            {
                $khuyenmai->MATT = 1;
            }
            else
                $khuyenmai->MATT = 2;
            $khuyenmai->TYLEKM = $request->TYLEKM;
            //$danhsach = $request->danhsach;
            $khuyenmai->save();

            $dskh = $request->get('danhsach');
            $ctkm = CTKhuyenMai::find($id);
            $ctkm->delete();
            foreach ($dskh as $ds)
            {
                $ctkm = new CTKhuyenMai();
                $ctkm ->MAKM = $khuyenmai->MAKM;
                $ctkm ->MAKH = $ds; 
                $ctkm->save();
            }
            return redirect('admin/khuyenmai/them')->with('thongbao', 'Thêm thành công!');
        }        
        return redirect('admin/khuyenmai/them')->with('thatbai', 'Thời kết phúc phải lớn hơn thời gian bắt đầu');

    }

    public function edit($id)
    {
        $khoahoc = KhoaHoc::paginate(10);
        $khuyenmai = KhuyenMai::find($id);
        $ctkhuyenmai = CTKhuyenMai::where('MAKM', '=', $id)->get();
        return view('admin.khuyenmai.edit', compact('khoahoc','khuyenmai','ctkhuyenmai'));
    }

    public function update(Request $request, $id)
    {
        
        $khuyenmai = KhuyenMai::find($id);
        $khuyenmai->NGAYBD = Carbon::createFromTimestamp(strtotime($request->NGAYBD . $request->TDBD . ":00"));      
        $khuyenmai->NGAYKT = Carbon::createFromTimestamp(strtotime($request->NGAYKT . $request->TDKT . ":00"));
        $date1 = $khuyenmai->NGAYBD;
        $date2 =  $khuyenmai->NGAYKT;   
        $result = $date1->lt($date2);
        if($result)
        {
            $khuyenmai->TENKM = $request->TENKM;  
            $today = date("Y-m-d h:i:sa");
            if(strtotime($khuyenmai->NGAYBD) <=  strtotime($today) && strtotime($today) < strtotime($khuyenmai->NGAYKT))
            {
                $khuyenmai->MATT = 1;
            }
            else
                $khuyenmai->MATT = 2;
            $khuyenmai->TYLEKM = $request->TYLEKM;
            //$danhsach = $request->danhsach;
            $khuyenmai->save();

            $dskh = $request->get('danhsach');
            $ctkm = CTKhuyenMai::find($id);
            foreach ($dskh as $ds)
            { 
                $ctkm ->MAKH = $ds; 
                $ctkm->save();
            }
            return redirect('admin/khuyenmai/sua/' . $id)->with('thongbao', 'Sửa thành công!');
        }
        return redirect('admin/khuyenmai/sua/'. $id)->with('thatbai', 'Thời kết phúc phải lớn hơn thời gian bắt đầu');

        
    }

    public function delete($id)
    {
        $khuyenmai = KhuyenMai::find($id);
        $khuyenmai->delete();

        return redirect('admin/khuyenmai/')->with('thongbao', 'Xóa thành công!');
    }

}
