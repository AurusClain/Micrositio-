<?php
namespace App\Http\Controllers;

use App\Models\Microsite;
use Illuminate\Http\Request;

class MicrositeController extends Controller
{
    public function index()
    {
        $microsites = Microsite::all();
        return view('microsites.index', compact('microsites'));
    }

    public function create()
    {
        return view('microsites.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'logo' => 'nullable|image',
            'category' => 'required|string|max:255',
            'currency' => 'required|string|max:3',
            'payment_expiry' => 'required|integer',
            'site_type' => 'required|string|in:invoice,subscription,donation',
        ]);

        Microsite::create($validated);

        return redirect()->route('microsites.index');
    }

    public function show(Microsite $microsite)
    {
        return view('microsites.show', compact('microsite'));
    }

    public function edit(Microsite $microsite)
    {
        return view('microsites.edit', compact('microsite'));
    }

    public function update(Request $request, Microsite $microsite)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'logo' => 'nullable|image',
            'category' => 'required|string|max:255',
            'currency' => 'required|string|max:3',
            'payment_expiry' => 'required|integer',
            'site_type' => 'required|string|in:invoice,subscription,donation',
        ]);

        $microsite->update($validated);

        return redirect()->route('microsites.index');
    }

    public function destroy(Microsite $microsite)
    {
        $microsite->delete();

        return redirect()->route('microsites.index');
    }
}