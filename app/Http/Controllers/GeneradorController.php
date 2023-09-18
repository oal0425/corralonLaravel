<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Detalle;
use App\Models\Producto;
use App\Models\Proveedor;
use App\Models\Comprobante;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Response as FacadeResponse;

class GeneradorController extends Controller
{

    public function obtener_productos_stock_minimo(){
        $productos = Producto::where("stock_actual", "<", 50)->get();
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
        $productos = Producto::all();
        $pdf = PDF::loadView('productos_datos',compact('productos'));
        return $pdf->download('productos_datos.pdf');
    }

    public function imprimir_detalle (){
        $detalles = Detalle::all();
        $pdf = PDF::loadView('detalle_factura',compact('detalles'));
        return $pdf->download('detalle_factura.pdf');
    }

    /*
    public function imprimir_detalle ($id){
        $detalles = Detalle::find($id);
        $pdf = PDF::loadView('detalle_factura',compact('detalles'));
        return $pdf->download('detalle_factura.pdf');
    }
    */

    /*Generar xml - como texto / revisar */
    public function generar_xml_cliente() {
        libxml_use_internal_errors(true);
        $clientes = Cliente::all();
        $nombre_archivo = 'clientes_xml.xml';
        $xml = "<?xml version=\"1.0\" encoding=\"UTF-8\" ?> \n <Document xmlns=\"urn:iso:std:iso:20022:tech:xsd:pain.008.001.02\">" .$clientes;
        $cliente_array = json_decode($clientes,true);
        /*$xml = simplexml_load_string("<root><root>");
        if ($xml === false) {
            echo ("failed loading XML document");
            foreach (libxml_get_errors() as $error) {
                echo "\t", $error->message, "\n";
            }
        }
        array_walk_recursive($cliente_array, array($xml, 'addchild'));*/
        $response = Response::make($xml,200);
        $response->header('Content-Type', 'text/xml');
        $response->header('Content-description', 'File transfer');
        $response->header('Content-Disposition', 'attachment;filename =' . $nombre_archivo . '');
        $response->header('Content-transfer-Encoding', 'binary');
        return $response;

        /*return $xml->asXML();*/
    }


    public function generar_xml_proveedor(){
        libxml_use_internal_errors(true);
        $proveedores = Proveedor::all();
        $nombre_archivo = 'proveedores_xml.xml';
        $xml = "<?xml version=\"1.0\" encoding=\"UTF-8\" ?> \n <Document xmlns=\"urn:iso:std:iso:20022:tech:xsd:pain.008.001.02\">" .$proveedores;
        $proveedores_array = json_decode($proveedores,true);
        $response = Response::make($xml,200);
        $response->header('Content-Type', 'text/xml');
        $response->header('Content-description', 'File transfer');
        $response->header('Content-Disposition', 'attachment;filename = '. $nombre_archivo . '');
        $response->header('Content-Transfer-Encoding', 'binary');
        return $response;
    }

    public function generar_xml_producto(){
        libxml_use_internal_errors(true);
        $productos = Producto::all();
        $nombre_archivo = 'productos_xml.xml';
        $xml = "<?xml version=\"1.0\" encoding=\"UTF-8\" ?> \n <Document xmlns=\"urn:iso:std:iso:20022:tech:xsd:pain.008.001.02\">" .$productos;
        $productos_array = json_decode($productos,true);
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
        $productos_array = json_decode($comprobantes,true);
        $response = Response::make($xml,200);
        $response->header('Content-Type', 'text/xml');
        $response->header('Content-description', 'File transfer');
        $response->header('Content-Disposition', 'attachment;filename = '. $nombre_archivo . '');
        $response->header('Content-Transfer-Encoding', 'binary');
        return $response;
    }


}
