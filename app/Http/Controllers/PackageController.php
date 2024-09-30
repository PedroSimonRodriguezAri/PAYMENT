<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;

class PackageController extends Controller
{

    public function index()
    {
        $packages = Package::all();
        return view('packages.index', compact('packages'));
    }


    public function create()
    {
        return view('packages.create');
    }


    public function store(Request $request)
    {
        Package::create($request->all());
        return redirect()->route('packages.index');
    }


    public function show(string $id)
    {
        $package = Package::findOrFail($id);
        return view('packages.show', compact('package'));
    }


    public function edit(Package $package)
    {
        return view('packages.edit', compact('package'));

    }


    public function update(Request $request, string $id)
    {
        $package = Package::findOrFail($id);
        $package->update($request->all());
        return redirect()->route('packages.index');
    }


    public function destroy(Package $package)
    {
        $package->delete();
        return redirect()->route('packages.index')->with('success', 'El paquete fue eliminado correctamente');
    }
}
