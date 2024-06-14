<?php

// namespace App\Imports;

// use App\Models\YourModel;
// use Maatwebsite\Excel\Concerns\ToModel;

// class ExcelImport implements ToModel
// {
//     /**
//     * @param array $row
//     *
//     * @return \Illuminate\Database\Eloquent\Model|null
//     */
//     public function model(array $row)
//     {
//         return new YourModel([
//             //
//         ]);
//     }
// }
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ExcelImport;

class ExcelController extends Controller
{
    public function showUploadForm()
    {
        return view('upload');
    }

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
