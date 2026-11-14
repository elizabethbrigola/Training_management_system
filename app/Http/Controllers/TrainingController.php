<?php
namespace App\Http\Controllers;

use App\Models\Training;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
    // Display all training records
    public function index()
    {
        $trainings = Training::all();

        return view('trainings.index', compact('trainings'));
    }

    // Show the create form
    public function create()
    {
        return view('trainings.create');
    }

    // Save a new training record
    public function store(Request $request)
    {
        $request->validate([
            'trainee_name' => 'required',
            'training_title' => 'required',
            'training_date' => 'required|date',
            'status' => 'required',
        ]);

        Training::create($request->all());

        return redirect()->route('trainings.index')
            ->with('success', 'Training record added successfully.');
    }

    // Display one training record
    public function show(Training $training)
    {
        return view('trainings.show', compact('training'));
    }

    // Show the edit form
    public function edit(Training $training)
    {
        return view('trainings.edit', compact('training'));
    }

    // Update a training record
    public function update(Request $request, Training $training)
    {
        $request->validate([
            'trainee_name' => 'required',
            'training_title' => 'required',
            'training_date' => 'required|date',
            'status' => 'required',
        ]);

        $training->update($request->all());

        return redirect()->route('trainings.index')
            ->with('success', 'Training record updated successfully.');
    }

    // Delete a training record
    public function destroy(Training $training)
    {
        $training->delete();

        return redirect()->route('trainings.index')
            ->with('success', 'Training record deleted successfully.');
    }
}
