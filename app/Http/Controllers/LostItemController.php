<?php

namespace App\Http\Controllers;

use App\Models\LostItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LostItemController extends Controller
{
    public function index()
    {
        $items = LostItem::orderBy('created_at','desc')->paginate(10);
        return view('lost.index', compact('items'));
    }

    public function create()
    {
        return view('lost.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title'=>'required|string|max:255',
            'type'=>'required|in:lost,found',
            'description'=>'nullable|string',
            'location'=>'nullable|string|max:255',
            'date_lost'=>'nullable|date',
            'image'=>'nullable|image|max:2048'
        ]);

        if($request->hasFile('image')){
            $data['image_path'] = $request->file('image')->store('images','public');
        }

        LostItem::create($data);
        return redirect()->route('lost.index')->with('success','Item berhasil ditambahkan');
    }

    public function show($id)
    {
        $item = LostItem::findOrFail($id);
        return view('lost.show', compact('item'));
    }

    public function edit($id)
    {
        $item = LostItem::findOrFail($id);
        return view('lost.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = LostItem::findOrFail($id);

        $data = $request->validate([
            'title'=>'required|string|max:255',
            'type'=>'required|in:lost,found',
            'description'=>'nullable|string',
            'location'=>'nullable|string|max:255',
            'date_lost'=>'nullable|date',
            'status'=>'required|in:open,matched,closed',
            'image'=>'nullable|image|max:2048'
        ]);

        if($request->hasFile('image')){
            if($item->image_path) Storage::disk('public')->delete($item->image_path);
            $data['image_path'] = $request->file('image')->store('images','public');
        }

        $item->update($data);
        return redirect()->route('lost.index')->with('success','Item berhasil diperbarui');
    }

    public function destroy($id)
    {
        $item = LostItem::findOrFail($id);
        if($item->image_path) Storage::disk('public')->delete($item->image_path);
        $item->delete();
        return redirect()->route('lost.index')->with('success','Item berhasil dihapus');
    }
}
