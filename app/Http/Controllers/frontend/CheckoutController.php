<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// load model
use App\Transaction;
use App\TransactionDetail;
use App\TravelPackages;
use Illuminate\Support\Facades\Mail;
// use Mail; // load library mailable laravel
use App\Mail\Ticket;

// library bawaan laravel untuk format tanggal
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index(Request $request, $id)
    {
        $item = Transaction::with(['details', 'travel_package', 'user'])->findOrFail($id);
        return view('frontend.pages.checkout', [
            'item' => $item
        ]);
    }

    public function process(Request $request, $id)
    {
        // koding ini memasukan data ke dalam transaksi

        $travel_package = TravelPackages::findOrFail($id);

        // koding insert transaksi
        $transaction = Transaction::create([
            'travel_packages_id' => $id,
            'users_id' => Auth::user()->id, // mengambil id user yang sedang login
            'additional_visa' => 0,
            'transaction_total' => $travel_package->price,
            'transaction_status' => 'IN_CART'
        ]);

        TransactionDetail::create([
            'transaction_id' => $transaction->id,
            'username' => Auth::user()->username,
            'nationality' => 'ID',
            'is_visa' => false,
            'due_passport' => Carbon::now()->addYears(5)
        ]);

        return redirect()->route('checkout', $transaction->id);
    }

    public function create(Request $request, $id)
    {
        // membuat validasi form
        $request->validate([
            'username' => 'required|string|exists:users,username',
            'nationality' => 'required',
            'is_visa' => 'required|boolean',
            'due_passport' => 'required'
        ]);

        // mengatur data yang akan di insert
        $data = $request->all();
        $data['transaction_id'] = $id;

        // insrt data
        TransactionDetail::create($data);

        // mengambil data transaksi
        $transaction = Transaction::with(['travel_package'])->find($id);

        // update data
        if ($request->is_visa) {
            $transaction->transaction_total += 190;
            $transaction->additional_visa += 190;
        }

        $transaction->transaction_total += $transaction->travel_package->price;
        $transaction->save();

        return redirect()->route('checkout', $id);
    }

    public function remove(Request $request, $detail_id)
    {
        $item = TransactionDetail::findOrFail($detail_id);
        $transaction = Transaction::with(['details', 'travel_package'])
            ->findOrFail($item->transaction_id);

        if ($item->is_visa) {
            $transaction->transaction_total -= 190;
            $transaction->additional_visa -= 190;
        }

        $transaction->transaction_total -= $transaction->travel_package->price;
        $transaction->save();

        $item->delete();

        return redirect()->route('checkout', $item->transaction_id);
    }

    public function success(Request $request, $id)
    {
        $transaction = Transaction::with(['details', 'travel_package.galleries', 'user'])->findOrFail($id);

        $transaction->transaction_status = "PENDING";
        $transaction->save();

        // kirim ticket ke user
        Mail::to($transaction->user)->send(
            new Ticket($transaction)
        );

        return view('frontend.pages.success');
    }
}
