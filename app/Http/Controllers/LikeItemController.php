<?php

namespace App\Http\Controllers;

use App\LikeItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $likeitems = LikeItem::select('like_items.*', 'items.name', 'items.amount')
        ->where('user_id', Auth::id())
        ->join('items', 'items.id', '=', 'like_items.item_id')
        ->get();
        return view('likeitem/index', ['likeitems' => $likeitems]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        LikeItem::updateOrCreate(
            [
                'user_id' => Auth::id(),
                'item_id' => $request->post('item_id'),
            ]
        );
        return redirect('/')->with('flash_message', '気になるリストに追加しました');
    }

    /**d
     * Display the specified resource.
     *
     * @param  \App\LikeItem  $likeItem
     * @return \Illuminate\Http\Response
     */
    public function show(LikeItem $likeItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LikeItem  $likeItem
     * @return \Illuminate\Http\Response
     */
    public function edit(LikeItem $likeItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LikeItem  $likeItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LikeItem $likeItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LikeItem  $likeItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(LikeItem $likeItem)
    {
        $likeItem->delete();
        return redirect('likeitem')->with('flash_message', 'お気に入りリストから削除しました');

    }
}
