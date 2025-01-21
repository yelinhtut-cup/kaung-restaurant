<?php

namespace App\Http\Controllers;

use App\Models\AddItem;
use App\Models\Category;
use App\Models\OrderConfirm;
use App\Models\Pickup;
use App\Models\Receipt;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $user = Auth::user();
        return view('menus.index', [
            'userName' => $user
        ]);
    }

    public function cuisine_index(){
        $cuisineItem = AddItem::all()->toArray();
        return view('menus.cuisine', [
            'item' => $cuisineItem
        ]);
    }

    public function rice_index(){
        return view('menus.rice');
    }

    public function test_index(){
        $existItem = AddItem::all()->toArray();

        return view('menus.cuisine_menu',[
            'item' => $existItem
        ]);
    }

    public function item_index(){
        $category = Category::all();

        return view('menus.add_item', [
            'category' => $category
        ]);
    }

    public function create(Request $request){
        try{

            $item = new AddItem();
            $item->category = $request->category;
            $item->item_name = $request->item_name;
            $item->price = $request->price;
            $item->save();

            // Flash a success message
            return redirect()->back()->with('success', 'Menu items saved successfully!');
        }catch (QueryException $e){
            // Check if the error is a duplicate entry
            if ($e->getCode() == 23000) {
                return redirect()->back()->with('error', 'Menu items already exists. Please use a unique value!');
            }
        }
    }

    public function edit($id){
        $editData = AddItem::find($id);
        return view('menus.cuisine_edit', [
            'editData' => $editData
        ]);
    }

    public function update(Request $request){
        AddItem::where('id', $request->id)
        ->update([
            'category' => $request->category,
            'item_name' => $request->item_name,
            'price' => $request->price
        ]);
        $item = AddItem::all()->toArray();
        return view('menus.cuisine_menu', [
            'item' => $item
        ]);
    }

    public function delete($id){
        AddItem::where('id', $id)->delete();
        $item = AddItem::all();
        return view('menus.cuisine_menu', [
            'item' => $item
        ]);
    }

    public function pick_up(Request $request){
        $itemId = $request->input('checked_id');
        $item = AddItem::find($itemId)->toArray();

        foreach($item as $items){
            $itemName[] = $items['item_name'];
            $itemPrice[] = $items['price'];
        }      

        foreach( $itemId as $key => $itemid ){
            $pickupData = new Pickup();
            $pickupData->checked_id = $itemid;
            $pickupData->item_name = $itemName[$key];
            $pickupData->price = $itemPrice[$key];
            $pickupData->save();
        }

        $itemPick = Pickup::all()->toArray();
       
        return view('menus.pickup', [
            'pickItem' => $itemPick
        ]);
    }

    public function pick_comfirm(Request $request){
        $comfirmId = $request->input('id');
        $item = Pickup::find($comfirmId)->toArray();

        foreach($item as $items){
            $comfirmName[] = $items['item_name'];
            $confirmPrice[] = $items['price']; 
        }
        $confirmOrder = $request->input('order_number');
        
        foreach( $confirmOrder as $key => $data ){
            $confirmData = new OrderConfirm();
            $confirmData->item_name = $comfirmName[$key];
            $confirmData->order_number = $data;
            $confirmData->price = $confirmPrice[$key];
            $confirmData->save();
        }
        return redirect('/menu/order/receipt');
    }

    public function all_pick_delete(){
         // Delete all records from the pickups table
        Pickup::query()->delete();
        $cuisineItem = AddItem::all()->toArray();
        return view('menus.cuisine', [
            'item' => $cuisineItem
        ]);
    }

    public function specific_pick_delete($id){
        Pickup::where('id', $id)->delete();
        $pickedItem = Pickup::all()->toArray();
        return view('menus.pickup', [
            'pickItem' => $pickedItem
        ]);
    }

    public function receipt_index(){
        $receiptData = OrderConfirm::all()->toArray();
        foreach($receiptData as $item){
            $price[] = $item['price'];
            $order[] = $item['order_number']; 
        }
       
        // Multiply each price and order_number
        foreach ($price as $key => $value) {
            $itemTotal[] = $value * $order[$key]; // Multiply price and order at the same index
        }
        $totalSum = array_sum($itemTotal); // Calculate the sum
        
        return view('menus.receipt',[
            'receipt' => $receiptData,
            'itemTotal' => $itemTotal,
            'total' => $totalSum
        ]);
    }

    public function receipt_create(Request $request){
        $receiptItem = $request->input('item_name');
        $receiptOrder = $request->input('order_number');
        $receiptPrice = $request->input('price');
        $receiptItemTotal = $request->input('total_per_item');

        // Get the latest receipt number and generate the next one
        $latestReceipt = Receipt::orderBy('id', 'desc')->value('receipt_number');
        $nextNumber = $latestReceipt ? (int)substr($latestReceipt, 8) + 1 : 1;
        $newReceiptNumber = 'receipt_' . str_pad($nextNumber, 4, '0', STR_PAD_LEFT);

        foreach ($receiptItem as $key => $item) {
            // Create a new Receipt record
            $receiptData = new Receipt();
            $receiptData->receipt_number = $newReceiptNumber;
            $receiptData->item_name = $item;
            $receiptData->order_number = $receiptOrder[$key];
            $receiptData->price = $receiptPrice[$key];
            $receiptData->total_per_item = $receiptItemTotal[$key];
            $receiptData->total = $request->input('total');
            $receiptData->save();
        }

        Pickup::truncate(); //to delete all records from a table. It resets the auto-increment ID
        OrderConfirm::truncate();
        $cuisineItem = AddItem::all()->toArray();

        return redirect()->route('cuisine',[
            'item' => $cuisineItem
        ])->with('success', 'Thank you! Your order has been placed successfully!'); 
    }

    public function see_order_list(){
        $orderList = Receipt::all()->toArray();
        
        return view('menus.order_list', [
            'orderList' => $orderList
        ]);
    }

    public function category_add(Request $request){
        try{
                $request->validate([
                'category_name' => 'string|required'
            ]);
            $category = new Category();
            $category->category_name = $request->category_name;
            $category->note = $request->note;
            $category->save();

            // Flash a success message
            return redirect()->route('cuisine_add')->with('success-category', 'Menu category added successfully!');
        }catch (QueryException $e){
            // Check if the error is a duplicate entry
            if ($e->getCode() == 23000) {
                return redirect()->route('cuisine_add')->with('error-category', 'Menu category already exists. Please use a unique value!');
            }
        }
    }

    public function category_remove($id){
        Category::where('id', $id)->delete();
        return redirect()->route('cuisine_add')->with('success-category-remove', 'Category removed successfully!');
    }
}
 