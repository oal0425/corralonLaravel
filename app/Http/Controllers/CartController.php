<?php
namespace App\Http\Controllers;
use Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function shop()
    {
        $products = Product::all();
        //dd($products);
        return view('shop')->withTitle('E-COMMERCE STORE | SHOP')->with(['products' => $products]);
    }

    public function cart()  {
        $cartCollection = \Cart::getContent();
        //dd($cartCollection);
        return view('cart')->withTitle('E-COMMERCE STORE | CART')->with(['cartCollection' => $cartCollection]);;
    }

    public function remove(Request $request){
        Cart::remove($request->id);
        return redirect()->route('cart.index')->with('success_msg', 'El producto ha sido removido!');
    }

    public function add(Request$request){
        \Cart::add(array(
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
            'image' => $request->img,
            'slug' => $request->slug
            )
        ));
        return redirect()->route('cart.index')->with('success_msg', 'Item Agregado a sú Carrito!');
    }

    public function update(Request $request){

        $producto = $this->buscarProducto($request->id);
        if ($producto->stock_actual >= $request->quantity){
            \Cart::update($request->id,
            array(
                'quantity' => array(
                'relative' => false,
                'value' => $request->quantity
                ),
        ));
        $producto->stock_actual = $producto->stock_actual - $request->quantity;
        $producto->save();
        return redirect()->route('cart.index')->with('success_msg', 'El carro se ha actualizado!');
        }
        else{
            return redirect()->route("cart.index")->with('success_msg', 'No se pueden agregar más productos de este tipo, No hay suficiente STOCK');
        }



    }

    public function clear(){
        \Cart::clear();
        return redirect()->route('cart.index')->with('success_msg', 'Car is cleared!');
    }

    public function buscarProducto($id){
        $producto = Product::find($id);
        return $producto;
    }


    /*
        public function update(Request $request){
        \Cart::update($request->id,
            array(
                'quantity' => array(
                'relative' => false,
                'value' => $request->quantity
                ),
        ));
        return redirect()->route('cart.index')->with('success_msg', 'El carro se ha actualizado!');
    }

    */
}
