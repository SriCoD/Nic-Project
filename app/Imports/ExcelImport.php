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
// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use Maatwebsite\Excel\Facades\Excel;
// use App\Imports\ExcelImport;

// class ExcelController extends Controller
// {
//     public function showUploadForm()
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


// namespace App\Imports;

// use App\Models\ExcelDataTable;
// use Maatwebsite\Excel\Concerns\ToModel;

// class ExcelImport implements ToModel
// {
//     public function model(array $row)
//     {
//         return new ExcelDataTable([
//             'column1' => $row[0],
//             'column2' => $row[1],
//             'column3' => $row[2],
//             'column4' => $row[3],
//             'column5' => $row[4],
//             'column6' => $row[5],
//             'column7' => $row[6],
//             'column8' => $row[7],
//         ]);
//     }
// }
namespace App\Imports;

use App\Models\ExcelDataTable;
use Maatwebsite\Excel\Concerns\ToModel;

class ExcelImport implements ToModel
{
    public function model(array $row)
    {
        // Check if the required indices exist in the $row array
        //  if (!isset($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7])) {
        //   return null; // Skip this row if not all columns are present
        //  }

        return new ExcelDataTable([
            'column1' => $row[0],
            'column2' => $row[1],
            'column3' => $row[2],
            'column4' => $row[3],
            'column5' => $row[4],
            'column6' => $row[5],
            'column7' => $row[6],
            'column8' => $row[7],
            //'column9' => $row[8],
           // 'column10' => $row[9],
           // 'column11' => $row[10],
           // 'column12' => $row[11],
        ]);
    }
}
