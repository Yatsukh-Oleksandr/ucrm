<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Doc;
use Illuminate\Http\Request;

class DocController extends Controller
{
    public function index() {
        return Doc::all();
    }

    public function show($id) {
        return Doc::findOrFail($id);
    }

    public function store(Request $request) {
        return Doc::create($request->all());
    }

    public function update(Request $request, $id) {
        $doc = Doc::findOrFail($id);
        $doc->update($request->all());
        return $doc;
    }

    public function destroy($id) {
        $doc = Doc::findOrFail($id);
        $doc->delete();
        return response()->json(['message' => 'Deleted']);
    }
}

