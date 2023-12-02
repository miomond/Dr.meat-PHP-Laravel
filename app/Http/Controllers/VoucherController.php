<?php

namespace App\Http\Controllers;

use App\Models\Voucher;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class VocherController extends Controller
{
    public function index()
    {
        // Get all vouchers from the database.
        $vouchers = Voucher::all();

        // Return the vouchers to the view.
        return view('vouchers.index', compact('vouchers'));
    }

    public function show($voucher)
    {
        // Get the voucher from the database.
        $voucher = Voucher::findOrFail($voucher);

        // Return the voucher to the view.
        return view('vouchers.show', compact('voucher'));
    }

    public function generate()
    {
        // Generate a new voucher code.
        $voucherCode = 'VOUCHER-' . Str::random(10);

        // Create a new voucher in the database.
        $voucher = Voucher::create([
            'voucher_code' => $voucherCode,
            'discount_amount' => 10,
            'expiration_date' => Carbon::now()->addDays(30),
        ]);

        // Return the voucher code to the user.
        return ['voucher_code' => $voucherCode];
    }

    public function update($voucher, Request $request)
    {
        // Get the voucher from the database.
        $voucher = Voucher::findOrFail($voucher);

        // Validate the voucher data.
        $this->validate($request, [
            'image' => 'image',
        ]);

        // Upload the voucher image.
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/vouchers', $imageName);

            // Delete the old voucher image.
            Storage::delete('public/vouchers/' . $voucher->image);

            $voucher->image = $imageName;
        }

        // Update the voucher in the database.
        $voucher->update($request->all());

        // Redirect to the voucher index page.
        return redirect('/vouchers');
    }

    public function destroy($voucher)
    {
        // Get the voucher from the database.
        $voucher = Voucher::findOrFail($voucher);

        // Delete the voucher from the database.
        $voucher->delete();

        // Delete the voucher image.
        Storage::delete('public/vouchers/' . $voucher->image);

        // Redirect to the voucher index page.
        return redirect('/vouchers');
    }
}
