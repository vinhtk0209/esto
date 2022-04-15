<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DanhMuc;
use Exception;

class DanhMucController extends Controller
{

    public function index()
    {
        $cateList = DanhMuc::orderby('MADM', 'desc')->get();
        return view('admin.danhmuc.index')->with('cateList', $cateList);
    }

    public function create()
    {
        $cateParent = DanhMuc::where('MADMCHA', 0)->orderby('MADM', 'desc')->get();
        return view('admin.danhmuc.create')->with('cateParent', $cateParent);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $request->validate(
            [
                'name' => "required|unique:danhmuc,TENDM",
            ],
            [
                'name.required' => 'Không được để trống trường này',
            ]
        );
        try {
            DanhMuc::create([
                'TENDM' => $data['name'],
                'GIOITHIEUDM' => $data['cat-short-des'],
                'CHITIETDM' => $data['cat-long-des'],
                'MADMCHA' => $data['parent_id'],
                'ACTIVE' => $data['active'],
            ]);
            return redirect()->back()->with('success', 'Thêm thành công');
        } catch (Exception $error) {
            return redirect()->back()->with('failed', 'Thêm thất bại');
        }
    }


    public function edit($id)
    {
        $cate = DanhMuc::find($id);
        $cateParent = DanhMuc::where('MADMCHA', 0)->orderby('MADM', 'desc')->get();
        return view('admin.danhmuc.edit')->with('cate', $cate)->with('cateParent', $cateParent);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $request->validate(
            [
                'name' => "required",
            ],
            [
                'name.required' => 'Không được để trống trường này',
            ]
        );
        try {
            $cate = DanhMuc::find($id);
            if ($data['parent_id'] != $cate->MADM) {
                $cate->update(
                    [
                        'MADMCHA' => $data['parent_id'],
                    ]
                );
            }
            $cate->update(
                [
                    'TENDM' => $data['name'],
                    'GIOITHIEUDM' => $data['cat-short-des'],
                    'CHITIETDM' => $data['cat-long-des'],
                    'ACTIVE' => $data['active'],
                ]
            );
            return redirect()->back()->with('success', 'Cập nhật thành công');
        } catch (Exception $error) {
            return redirect()->back()->with('failed', 'Cập nhật thất bại');
        }
    }

    public function delete($id)
    {
        try {
            $cat = DanhMuc::where('MADM', $id)->orWhere('MADMCHA', $id)->delete();
            return redirect()->back()->with('success', 'Xóa thành công!');
        } catch (Exception $error) {
            return redirect()->back()->with('failed', 'Xóa thất bại');
        }
    }
}
