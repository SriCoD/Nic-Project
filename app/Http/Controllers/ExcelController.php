<?php

namespace App\Http\Controllers;




    use Illuminate\Http\Request;
    use Maatwebsite\Excel\Facades\Excel;
    use App\Imports\ExcelImport;
    use App\Models\ExcelData;
    
    class ExcelController extends Controller
    {
//         public function showUploadForm()
//         {
//             return view('upload-excel');
//         }
    
//         public function uploadExcel(Request $request)
//         {
//             $request->validate([
//                 'excel_file' => 'required|file|mimes:xlsx'
//             ]);
    
//             $path = $request->file('excel_file')->store('temp');
//             $filePath = storage_path('app') . '/' . $path;
    
//             session(['excel_file' => $filePath]);
    
//             return redirect()->route('upload.form')->with('preview', true);
//         }
    
//         public function storeExcelData(Request $request)
//         {
//             $filePath = session('excel_file');
//             if (!$filePath) {
//                 return redirect()->route('upload.form')->with('error', 'No file uploaded');
//             }
    
//             $data = Excel::toArray(new ExcelImport, $filePath);
//             $rows = $data[0];
    
//             foreach ($rows as $row) {
//                 ExcelData::create([
//                     'column1' => $row[0],
//                     'column2' => $row[1],
//                     // Add more columns as needed
//                 ]);
//             }
    
//             return redirect()->route('dashboard')->with('success', 'Data stored successfully');
//         }
    
//         public function dashboard()
//         {
//             $data = ExcelData::all();
    
//             return view('dashboard', compact('data'));
//         }
//     }
    
// }


// public function showUploadForm()
//     {
//         return view('upload');
//     }

//     public function uploadFile(Request $request)
//     {
//         $request->validate([
//             'excel_file' => 'required|mimes:xlsx',
//         ]);

//         $path = $request->file('excel_file')->store('temp');
//         $file = storage_path('app/' . $path);

//         $data = Excel::toArray(new ExcelImport, $file);

//         return view('preview', ['data' => $data[0]]);
//     }
// }

 // Method to show the upload form
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

     $data = Excel::toArray(new ExcelImport, $file);

     return view('preview', ['data' => $data[0]]);
 }
}