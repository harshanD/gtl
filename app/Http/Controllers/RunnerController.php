<?php

namespace App\Http\Controllers;

use App\Http\Resources\RunnerCollection;
use App\Http\Resources\RunnerResource;
use App\Runners;
use Illuminate\Http\Request;
use ErrorHandler;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpKernel\Exception\HttpException;

class RunnerController extends Controller
{
    public function get(Request $request)
    {
        try {

            $d = Runners::with('form_last_runrs')->where('id', $request['id'])->get();

            $data = empty($d) ? [] : new RunnerCollection($d);

            return response()->json(['success' => true, 'data' => $data, 'status' => 200], 200);

        } catch (\Exception $e) {

            Log::error($e);
            throw new HttpException(500, $e->getMessage());
        }
    }
}
