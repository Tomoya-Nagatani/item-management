<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Item;
use App\Exports\ItemExport;
use Maatwebsite\Excel\Facades\Excel;

class ItemController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $keyword = $request->input('keyword');
        $items = Item::where('status', 'active')
        ->where('user_id', $request->user()->id)
            ->when(!empty($keyword), function($query) use($keyword){
                return $query->where('name', 'like', '%' . $keyword . '%')
                    ->orWhere('address', 'like', '%' . $keyword . '%');
            })
            ->sortable()
            ->paginate(10);
        return view('items.index')->with('items', $items);
    }

    /**
     * 商品登録
     */
    public function add(Request $request)
    {
        // POSTリクエストのとき
        if ($request->isMethod('post')) {
            // バリデーション
            $this->validate($request, [
                'name' => 'required',
                'zipcode' => 'required',
                'address' => 'required',
                'content2021' => 'required',
                'content2022' => 'required',
                'content' => 'required',
                'category' => 'required',
            ]);
            // dd($request->all());
            // 商品登録
            Item::create([
                'user_id' => Auth::user()->id,
                'name' => $request->name,
                'zipcode' => $request->zipcode,
                'address' => $request->address,
                'content2021' => $request->content2021,
                'content2022' => $request->content2022,
                'content' => $request->content,
                'category' => $request->category,
                'memo' => $request->memo,
            ]);

            return redirect('/items')->with('flash_message', '新規追加しました');
        }

        return view('items.add');
    }

    public function show(Request $request)
    {
        $item = Item::where('id', '=', $request->id)->first();
     
        return view('items.show')->with([
            'item' => $item
        ]);
    }   

    // 商品編集ページ
    public function edit(Request $request)
    {
        $item = Item::where('id', '=', $request->id)->first();
        return view('items.edit')->with([
            'item' => $item,
        ]);
    }

    public function update(Request $request)
    {

        // 既存のレコードを取得して、編集してから保存する
        $item = Item::where('id', '=', $request->id)->first();
        $item->name = $request->name;
        $item->zipcode = $request->zipcode;
        $item->address = $request->address;
        $item->content2021 = $request->content2021;
        $item->content2022 = $request->content2022;
        $item->content = $request->content;
        $item->memo = $request->memo;
        $item->save();
        return redirect('/items')->with('flash_message', '編集が完了しました');
    }
    public function destroy(Request $request)
    {
        $item = Item::where('id', '=', $request->id)->first();
        $item->delete();

        return redirect('/items')->with('flash_message', '削除しました');;
    }

    // CSV出力
    public function exportExcel(Request $request){
        return Excel::download(new ItemExport, 'items.xlsx');
    }

}
