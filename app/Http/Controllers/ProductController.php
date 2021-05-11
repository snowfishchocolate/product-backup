<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Products;
class ProductController extends Controller
{
    //
    public function product()
    {
        //綠色的Product只要建model就不會有紅色底線
        $data=Products::get();
        dd('123');
        return view('cards.home',compact('data'));

    }
//     public function create()
//     {
//         $data=Products::get();
//         return view('cards.home',compact('data'));
// ;
//     }
public function store(Request $request)
{
    $requsetData = $request->all();

    if($request->hasFile('img')) {
        $file = $request->file('img');
        $path = $this->fileUpload($file,'product');
        $requsetData['img'] = $path;
    }

    Products::create($requsetData);

    return redirect('/admin/product');
}

public function update(Request $request, $id)
{
    $item = Products::find($id);

    $requsetData = $request->all();
    if($request->hasFile('img')) {
        $old_image = $item->img;
        $file = $request->file('img');
        $path = $this->fileUpload($file,'product');
        $requsetData['img'] = $path;
        File::delete(public_path().$old_image);
    }

    $item->update($requsetData);

    return redirect('/admin/product');
}

public function destroy($id)
{
    $item = Products::find($id);
    $old_image = $item->img;
    if(file_exists(public_path().$old_image)){
        File::delete(public_path().$old_image);
    }
    $item->delete();

    return redirect('/admin/product');
}
private function fileUpload($file,$dir){
    //防呆：資料夾不存在時將會自動建立資料夾，避免錯誤
    if( ! is_dir('upload/')){
        mkdir('upload/');
    }
    //防呆：資料夾不存在時將會自動建立資料夾，避免錯誤
    if ( ! is_dir('upload/'.$dir)) {
        mkdir('upload/'.$dir);
    }
    //取得檔案的副檔名
    $extension = $file->getClientOriginalExtension();
    //檔案名稱會被重新命名
    $filename = strval(time().md5(rand(100, 200))).'.'.$extension;
    //移動到指定路徑
    move_uploaded_file($file, public_path().'/upload/'.$dir.'/'.$filename);
    //回傳 資料庫儲存用的路徑格式
    return '/upload/'.$dir.'/'.$filename;
}

}
