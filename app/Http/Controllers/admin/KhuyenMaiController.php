<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\KhuyenMai;
use App\Models\CTKhuyenMai;
use App\Models\KhoaHoc;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class KhuyenMaiController extends Controller
{
    public function index()
    {
        $today = date("Y-m-d h:i:sa");

        KhuyenMai::where('NGAYBD', '>',  $today)
        ->update(['MATT' => '1']);

        KhuyenMai::where('NGAYBD', '<=',  $today)
        ->where('NGAYKT', '=>', $today)
        ->update(['MATT' => '2']);

        KhuyenMai::where('NGAYKT', '<', $today)
        ->update(['MATT' => '3']);

        $khuyenmai = KhuyenMai::paginate(10);      
        return view('admin.khuyenmai.index', ['khuyenmai'=>$khuyenmai]);
    }
    
    public function create()
    {
        $khoahoc = KhoaHoc::all();
        return view('admin.khuyenmai.create', ['khoahoc'=>$khoahoc]);
    }

    public function store(Request $request)
    {        
        $this->validate(
            $request,
            [
                'TENKM' => 'unique:KhuyenMai,TENKM|min:10|max:100'
            ],
            [
                'TENKM.unique' => 'Tên khuyến mãi đã tồn tại',
                'TENKM.min' => 'Tên khuyến mãi phải có độ dài từ 10 đến 100 ký tự',
                'TENKM.max' => 'Tên khuyến mãi phải có độ dài từ 10 đến 100 ký tự'
            ]
        );

        $data = $request->all();   
        $dateBD = Carbon::createFromTimestamp(strtotime($data['NGAYBD'] . $data['TDBD']));      
        $dateKT = Carbon::createFromTimestamp(strtotime($data['NGAYKT'] . $data['TDKT']));   
        $today = date("Y-m-d h:i:sa");
            if(strtotime($dateBD) >  strtotime($today))
            {
                $MATT = 1;
            }    
            else if(strtotime($dateBD) <=  strtotime($today) && strtotime($today) <= strtotime($dateKT))
            {
                $MATT = 2;
            }
                
        $result = $dateBD->lt($dateKT);
        $exits1 = KhuyenMai::Where('NGAYKT','>',$dateBD)->where('NGAYBD','<', $dateBD)->count();
        $exits2 = KhuyenMai::Where('NGAYBD','<',$dateKT)->where('NGAYKT','>', $dateKT)->count();
        
        if ($result) 
            {
                if ($exits1 > 0 || $exits2 > 0) {
                        return redirect('admin/khuyenmai/them')->with('thatbai', 'Đã tồn tại khuyến mãi khác trong thời gian này.!');
                }
                else {
                    try {
                        $khuyenmai = KhuyenMai::create([
                            'TENKM' => $data['TENKM'],
                            'TYLEKM' => $data['TYLEKM'],
                            'NGAYBD' => $dateBD,
                            'NGAYKT' => $dateKT,
                            'MATT' => $MATT
                        ]);

                        if(isset($data['danhsach']) != null){
                            $dskh = $data['danhsach'];
                            foreach ($dskh as $ds) {
                                CTKhuyenMai::create([
                                'MAKM' => $khuyenmai->MAKM,
                                'MAKH' => $ds
                                ]);  
                            }            
                        }                      
                        return redirect('admin/khuyenmai/them')->with('thongbao', 'Thêm thành công!');
                    } catch (Exception $error) {
                        return redirect('admin/khuyenmai/them')->with('thongbao', 'Thêm thất bại.!');
                    }
                }
            }
            else
                return redirect('admin/khuyenmai/them')->with('thatbai', 'Thời gian kết phúc phải lớn hơn thời gian bắt đầu');
    }

    public function edit($id)
    {
        $khoahoc = KhoaHoc::all();
        $khuyenmai = KhuyenMai::find($id);
        $ctkhuyenmai = CTKhuyenMai::where('MAKM', '=', $id)->get();
        return view('admin.khuyenmai.edit', compact('khoahoc','khuyenmai','ctkhuyenmai'));
    }

    public function update(Request $request, $id)
    {
        $this->validate(
            $request,
            [
                'TENKM' => 'unique:KhuyenMai,TENKM|min:10|max:100'
            ],
            [
                'TENKM.unique' => 'Tên khuyến mãi đã tồn tại',
                'TENKM.min' => 'Tên khuyến mãi phải có độ dài từ 10 đến 100 ký tự',
                'TENKM.max' => 'Tên khuyến mãi phải có độ dài từ 10 đến 100 ký tự'
            ]
        );

        $data = $request->all();   
        $dateBD = Carbon::createFromTimestamp(strtotime($data['NGAYBD'] . $data['TDBD']));      
        $dateKT = Carbon::createFromTimestamp(strtotime($data['NGAYKT'] . $data['TDKT']));   
        $today = date("Y-m-d h:i:sa");
        $MATT = 3;
            if(strtotime($dateBD) >  strtotime($today))
            {
                $MATT = 1;
            }    
            else if(strtotime($dateBD) <=  strtotime($today) && strtotime($today) <= strtotime($dateKT))
            {
                $MATT = 2;
            }
        $result = $dateBD->lt($dateKT);
        // if (KhuyenMai::where('TENKM', '=',$data['TENKM'])->count() < 1) 
        // {
            if($result)
            {
                try {
                    $khuyenmai = KhuyenMai::find($id);
                    $khuyenmai->update(
                        [
                            'TENKM' => $data['TENKM'],
                            'TYLEKM' => $data['TYLEKM'],
                            'NGAYBD' => $dateBD,
                            'NGAYKT' => $dateKT,
                            'MATT' => $MATT
                        ]
                    );
                    $dskh = $data['danhsach'];
                    CTKhuyenMai::where('MAKM', $id)->delete();
                    if($dskh != null){
                        foreach ($dskh as $ds) {
                            CTKhuyenMai::create([
                            'MAKM' => $khuyenmai->MAKM,
                            'MAKH' => $ds
                            ]);                
                        }
                    }
                    return redirect('admin/khuyenmai/sua/' . $id)->with('thongbao', 'Sửa thành công!');
                } catch (Exception $error) {
                    return redirect('admin/khuyenmai/sua/' . $id)->with('thongbao', 'Sửa thất bại.!');
                }        
            }
            else
                return redirect('admin/khuyenmai/sua/' . $id)->with('thatbai', 'Thời gian kết phúc phải lớn hơn thời gian bắt đầu'); 
        // }
        // else
        //     return redirect('admin/khuyenmai/sua/' . $id)->with('exits', 'Khuyến mãi này đã tồn tại'); 
    }

    public function delete($id)
    {
        $khuyenmai = KhuyenMai::find($id);
        $khuyenmai->delete();

        return redirect('admin/khuyenmai/')->with('thongbao', 'Xóa thành công!');
    }

}