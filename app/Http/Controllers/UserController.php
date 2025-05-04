<?php

namespace App\Http\Controllers;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use App\Models\Transaction;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;




class UserController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function orders()
    {
        $orders = Order::where('user_id', Auth::user()->id)->orderBy('created_at', 'DESC')->paginate(10);
        return view('user.orders', compact('orders'));
    }

    public function order_details($order_id)
    {
        $order = Order::where('user_id', Auth::user()->id)->where('id', $order_id)->first();
        if ($order)
        {
            $orderItems = OrderItem::where('order_id', $order->id)->orderBy('id')->paginate(12);
            $transaction = Transaction::where('order_id', $order->id)->first();
            return view('user.order-details', compact('order','orderItems', 'transaction'));
        }
        else
        {
            return redirect()->route('login');
        }
    }

    public function order_cancel(Request $request){
        $order = Order::find($request->order_id);
        $order->status = "canceled";
        $order->canceled_date = Carbon::now();
        $order->save();

        return back()->with('status', "Order has been cancelled successfully!");
    }

    public function edit()
    {
        $user = Auth::user();
        return view('user.account-details', compact('user'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'mobile' => 'required|string|max:20|unique:users,mobile,' . Auth::id(),
            'email' => 'required|email|unique:users,email,' . Auth::id(),
            'old_password' => 'nullable|string',
            'new_password' => 'nullable|string|min:6|confirmed',
        ]);

        try {
            $user = Auth::user();
            $user->name = $request->name;
            $user->mobile = $request->mobile;
            $user->email = $request->email;

            if ($request->filled('old_password') && Hash::check($request->old_password, $user->password)) {
                $user->password = Hash::make($request->new_password);
            } elseif ($request->filled('old_password')) {
                return back()->withErrors(['old_password' => 'Old password is incorrect']);
            }

            $user->save();

            return redirect()->route('user.index')->with('status', 'Account details updated successfully!');
        } catch (\Exception $e) {
            return back()->withErrors(['account' => 'An error occurred while updating your account. Please try again.']);
        }
    }



}
