<?php

namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Maatwebsite\Excel\Facades\Excel;
    use App\Imports\ExcelImport;
    use App\Models\ExcelDataTable;
    
    class ExcelController extends Controller
    {
 public function showUploadForm()
 {
     return view('upload');
 }

 // Method to handle the file upload and preview
 public function uploadFile(Request $request)
 {
     $request->validate([
         'excel_file' => 'required|mimes:xlsx',
     ]);

     $path = $request->file('excel_file')->store('temp');
     $file = storage_path('app/' . $path);

     //$data = Excel::toArray(new ExcelImport, $file);

     //return view('preview', ['data' => $data[0]]);

     Excel::import(new ExcelImport, $file);

     //return redirect()->route('upload.form')->with('success', 'Excel data imported successfully');
     return redirect()->route('dashboard')->with('success', 'Excel data imported successfully');

 
    }
    public function showDashboard()
    {
        $importedData = ExcelDataTable::all();
        return view('dashboard', compact('importedData'));
    }
    }