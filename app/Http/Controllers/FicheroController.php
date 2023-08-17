<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;


class FicheroController extends Controller
{

    public function generar_json_cliente(){
        $clientes = Cliente::all();
        return $clientes;
    }

    public function json_to_xml($json){
        $json_array = json_decode($json, true);
        $xml = simplexml_load_string("<root></root>");
        array_walk_recursive($json_array, array($xml,'addChild'));
        return $xml->asXML();
    }
}

/*
$json = '{"name": "John", "age": 30, "city": "New York"}';
$json_array = json_decode($json, true); // convert JSON to array
$xml = simplexml_load_string("<root></root>"); // create a new XML element
array_walk_recursive($json_array, array ($xml, 'addChild')); // add array elements to XML
print $xml->asXML(); // output XML

*/

/*
Pueden ir pensando en impresiones en pdf y poder exportar esos pdf a xwcl

Listados de productos bajo de stock por ejemplo...

Listado de proveedores y que tambien se puedan descargar en excel
*/
