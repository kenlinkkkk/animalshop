<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function uploadImage(Request $request)
    {
        $data[] = null;
        if ($request->ajax()) {
            if ($request->hasFile('file')) {
                $imageFile = $request->file('file');

                $day = date('d');
                $month = date('m');
                $year = date('Y');

                $filePath = 'uploads/'. $year .'/'. $month .'/'. $day;
                $filePath = str_replace('\\', '/', $filePath);
                foreach ($request->file('file') as $fileKey => $fileObject) {
                    if ($fileObject->isValid()) {
                        $destinationFileName = time() . $fileObject->getClientOriginalName();

                        $fileObject->move($filePath, $destinationFileName);
                        $data[] = $filePath .'/'. $destinationFileName;
                    }
                }

            $data = array_filter($data);
            }
        }

        return response()->json([
            'code' => 200,
            'message' => 'Upload thành công',
            'data' => $data
        ]);
    }
}
