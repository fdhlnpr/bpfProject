<?php

namespace App\Http\Controllers;

use App\Models\jasa;
use App\Http\Requests\StorejasaRequest;
use App\Http\Requests\UpdatejasaRequest;
use App\Models\barang;
use Illuminate\Http\Request;
use Midtrans\Snap;
use Midtrans\Config;

class JasaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = barang::all();
        return view('jasa', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createTransaction(Request $request)
    {
        // Validasi input
        $request->validate([
            'total_amount' => 'required|numeric|min:1',
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
        ]);

        // Set konfigurasi Midtrans
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');
        Config::$isSanitized = config('midtrans.is_sanitized');
        Config::$is3ds = config('midtrans.is_3ds');

        // Simulasi data transaksi
        $orderId = 'ORDER-' . rand();
        $grossAmount = $request->input('total_amount');

        $params = [
            'transaction_details' => [
                'order_id' => $orderId,
                'gross_amount' => $grossAmount,
            ],
            'customer_details' => [
                'first_name' => $request->input('name'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
            ],
        ];

        try {
            // Buat transaksi menggunakan Midtrans Snap
            $snapToken = Snap::getSnapToken($params);
            return response()->json(['snap_token' => $snapToken]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorejasaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(jasa $jasa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(jasa $jasa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatejasaRequest $request, jasa $jasa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(jasa $jasa)
    {
        //
    }
}
