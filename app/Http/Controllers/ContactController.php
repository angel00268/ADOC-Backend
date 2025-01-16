<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Exception;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:200',
            'email' => 'required|email',
            'message' => 'required|string',
        ], [
            'name.required' => 'El campo nombre es requerido',
            'email.required' => 'El campo correo electrónico es requerido',
            'email.email' => 'El campo correo electrónico debe ser una dirección de correo válida',
            'message.required' => 'El campo mensaje es requerido',
        ], [
            'name' => 'Nombre',
            'email' => 'Correo electrónico',
            'message' => 'Mensaje',
        ]);

        try {
            Contact::create($request->all());
            return response()->json([
                'message' => 'Gracias por tu mensaje, te responderemos a la brevedad',
                'error' => null
            ]);
        } catch (\Exception $ex) {
            return response()->json([
                'message' => 'Gracias por tu mensaje, te responderemos a la brevedad',
                'error' => $ex->getMessage()
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
