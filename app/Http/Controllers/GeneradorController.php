<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Detalle;
use App\Models\Product;
use App\Models\Proveedor;
use App\Models\Comprobante;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Response as FacadeResponse;

class GeneradorController extends Controller
{

    public function obtener_productos_stock_minimo(){
        $productos = Product::where("stock_actual", "<", 50)->get();
        return $productos;
    }


    public function imprimir_productos_stock_minimo()
    {
        $productos = $this->obtener_productos_stock_minimo();
        if (!$productos){
            return redirect()
                    ->route("cart.index")
                    ->with("mensaje", "No hay productos con stock minimo");
        }
        else{
            $pdf = PDF::loadView('productos_stock_minimo',compact('productos'));
            return $pdf->download('productos_stock_minimo.pdf');
        }
    }

    public function imprimir_cliente (){
        $clientes = Cliente::all();
        $pdf = PDF::loadView('clientes_datos',compact('clientes'));
        return $pdf->download('clientes_datos.pdf');
    }

    public function imprimir_proveedor (){
        $proveedores = Proveedor::all();
        $pdf = PDF::loadView('proveedores_datos',compact('proveedores'));
        return $pdf->download('clientes_datos.pdf');
    }

    public function imprimir_producto (){
        $productos = Product::all();
        $pdf = PDF::loadView('productos_datos',compact('productos'));
        return $pdf->download('productos_datos.pdf');
    }

    public function imprimir_detalle (){
        $detalles = Detalle::all();
        $pdf = PDF::loadView('detalle_factura',compact('detalles'));
        return $pdf->download('detalle_factura.pdf');
    }

    public function generar_xml_cliente() {
        libxml_use_internal_errors(true);
        $clientes = Cliente::all();
        $nombre_archivo = 'clientes_xml.xml';
        $xml = "<?xml version=\"1.0\" encoding=\"UTF-8\" ?> \n <Document xmlns=\"urn:iso:std:iso:20022:tech:xsd:pain.008.001.02\">" .$clientes;
        $response = Response::make($xml,200);
        $response->header('Content-Type', 'text/xml');
        $response->header('Content-description', 'File transfer');
        $response->header('Content-Disposition', 'attachment;filename =' . $nombre_archivo . '');
        $response->header('Content-transfer-Encoding', 'binary');
        return $response;
    }


    public function generar_xml_proveedor(){
        libxml_use_internal_errors(true);
        $proveedores = Proveedor::all();
        $nombre_archivo = 'proveedores_xml.xml';
        $xml = "<?xml version=\"1.0\" encoding=\"UTF-8\" ?> \n <Document xmlns=\"urn:iso:std:iso:20022:tech:xsd:pain.008.001.02\">" .$proveedores;
        $response = Response::make($xml,200);
        $response->header('Content-Type', 'text/xml');
        $response->header('Content-description', 'File transfer');
        $response->header('Content-Disposition', 'attachment;filename = '. $nombre_archivo . '');
        $response->header('Content-Transfer-Encoding', 'binary');
        return $response;
    }

    public function generar_xml_producto(){
        libxml_use_internal_errors(true);
        $productos = Product::all();
        $nombre_archivo = 'productos_xml.xml';
        $xml = "<?xml version=\"1.0\" encoding=\"UTF-8\" ?> \n <Document xmlns=\"urn:iso:std:iso:20022:tech:xsd:pain.008.001.02\">" .$productos;
        $response = Response::make($xml,200);
        $response->header('Content-Type', 'text/xml');
        $response->header('Content-description', 'File transfer');
        $response->header('Content-Disposition', 'attachment;filename = '. $nombre_archivo . '');
        $response->header('Content-Transfer-Encoding', 'binary');
        return $response;
    }


    public function generar_xml_comprobante(){
        libxml_use_internal_errors(true);
        $comprobantes = Comprobante::all();
        $nombre_archivo = 'comprobantes_xml.xml';
        $xml = "<?xml version=\"1.0\" encoding=\"UTF-8\" ?> \n <Document xmlns=\"urn:iso:std:iso:20022:tech:xsd:pain.008.001.02\">" .$comprobantes;
        $response = Response::make($xml,200);
        $response->header('Content-Type', 'text/xml');
        $response->header('Content-description', 'File transfer');
        $response->header('Content-Disposition', 'attachment;filename = '. $nombre_archivo . '');
        $response->header('Content-Transfer-Encoding', 'binary');
        return $response;
    }

    public function imprimir_comprobantes(){
        $comprobantes = Comprobante::all();
        $pdf = PDF::loadView('comprobante_datos',compact('comprobantes'));
        return $pdf->download('comprobante_datos.pdf');
    }

    public function imprimir_comprobante($id){
        $comprobante = Comprobante::find($id);
        $pdf = PDF::loadView('comprobante_factura',compact('comprobante'));
        return $pdf->download('comprobante_factura.pdf');
    }


}
