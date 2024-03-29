<?php

namespace App\Http\Controllers;

use App\Bid;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBid;
use Auth;
use DB;

class BidController extends Controller
{
    public function __construct(Bid $bid){
        $this->bid = $bid;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bids = $this->bid
            ->select('*' , DB::raw("max(price) as maxBid"))
            ->where('user_id', Auth::user()->id)
            ->groupBy('auction_id')
            ->orderBy('created_at', 'desc')
            ->get();


        return view(
            'bids.index',
            ['bids' => $bids,
            ]
        );
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
        $bid = $this->bid->create([
            'user_id' =>  Auth::user()->id,
            'auction_id' => $request->auction_id,
            'price' => $request->price,
        ]);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
