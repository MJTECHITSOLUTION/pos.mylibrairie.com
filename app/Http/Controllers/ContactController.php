<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'city' => 'nullable|string|max:100',
            'message' => 'nullable|string'
        ]);

        $data = [
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'city' => $request->input('city'),
            'message' => $request->input('message'),
            'date' => now()->toDateTimeString()
        ];

        $filePath = storage_path('app/data/contacts.json');
        
        // Make sure directory exists
        if (!file_exists(dirname($filePath))) {
            mkdir(dirname($filePath), 0755, true);
        }

        $contacts = [];
        if (file_exists($filePath)) {
            $contacts = json_decode(file_get_contents($filePath), true) ?? [];
        }

        $contacts[] = $data;

        file_put_contents($filePath, json_encode($contacts, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

        return response()->json(['success' => true, 'message' => 'Data saved successfully']);
    }
}
