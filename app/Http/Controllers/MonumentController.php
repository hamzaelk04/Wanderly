<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Monument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MonumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $monuments = Monument::with(['categories', 'images'])->get();

        return view('monument', compact('monuments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();

        return view('dashboard-views.admin.create-monument', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'description' => 'nullable|string',
            'history' => 'nullable|string',
            'category_id' => 'required|exists:categories,id',
            'openning' => 'nullable|date_format:H:i',
            'closing' => 'nullable|date_format:H:i',
            'fees' => 'nullable|numeric',
            'images.*' => 'image|max:10240',
        ]);

        DB::beginTransaction();

        try {
            $monument = Monument::create([
                'name' => $request->name,
                'city' => $request->city,
                'address' => $request->address,
                'description' => $request->description,
                'history' => $request->history,
                'openning' => $request->openning,
                'closing' => $request->closing,
                'fees' => $request->fees,
            ]);

            $monument->categories()->attach($request->category_id);

            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $path = $image->store('monuments', 'public');

                    $monument->images()->create([
                        'path' => $path
                    ]);
                }
            }

            DB::commit();

            return redirect()->route('create-monument');
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->withErrors($th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $monument = Monument::with(['categories', 'images'])
        ->findOrFail($id);

        return view('details.monument-detail', compact('monument'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
