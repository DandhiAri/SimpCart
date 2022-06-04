<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use App\Models\Transec;
use Illuminate\Http\Request;

class TransController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->Transec = new Transec();
    }
    public function index()
    {
        // return view('admin.Transec');
        $transecs = Transec::latest()->paginate(10);

        return view('admin.transec', compact('transecs'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }
    public function findex()
    {
        $transecs = Transec::latest()->paginate(10);

        return view('home.transaction', compact('transecs'), [
            "title" => "transaksi",
            "active" => "transaksi"
        ])
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }
    public function updatetrans()
    {
        $trans = Trans::find('id');
        $trans->status = "delivered";
        $trans->save();
        return redirect()->back();
    }
    public function invoice($trans_id)
    {
        // $invoice = Invoice::where('trans_id', $trans_id)->first();
        // if (is_null($invoice)) {
        //     $totalitem = Carbon::today;
        //     $invoice->trans_id = $trans_id;
        //     $invoice->tanggallist = $todaydate;
        //     $invoice->status = 1;
        //     $invoice->save();
        // }
        // $order = Trans::find($id);
        // $customer_id = $order->user_id;
        // $profile = User::where('user_id', $user_id)->first();
    }
    public function print()
    {
        $transecs = Transec::latest()->paginate(10);

        return view('admin.print', compact('transecs'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }
    public function printpdf()
    {

        $transecs = Transec::latest()->paginate(10);

        $html = view('admin.printpdf', compact('transecs'))
            ->with('i', (request()->input('page', 1) - 1) * 10);

        // instantiate and use the dompdf class
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream();
    }
    // function getPDF($type)
    // {

    //     $pdf = app('dompdf.wrapper')->loadView('invoice');

    //     if ($type == 'stream') {
    //         return $pdf->stream('invoice.pdf');
    //     }

    //     if ($type == 'download') {
    //         return $pdf->download('invoice.pdf');
    //     }
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.compt.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $trans = Transec::latest()->paginate(10);

        // return view('admin.transec', compact('trans'))
        //     ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $trans = Transec::latest()->paginate(10);

        // return view('admin.transec', compact('trans'))
        //     ->with('i', (request()->input('page', 1) - 1) * 10);
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
