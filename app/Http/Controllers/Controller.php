<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\apiShares;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function askSifu(Request $req)
    {
        // dd($req);
        // return $req->prompt;
        // $res = null;

        $key = apiShares::latest()->first();
        if($key == null || $key == [])
        {
            return inertia('Response', ['response' => 'API Key is null. Please share new key :)']);
        }

        // // Initialize a cURL session
        $endpoint = 'https://api.openai.com/v1/completions';

        // Set the request body
        $body = [
            'model' => 'text-davinci-003',
            'prompt' => $req->prompt,
            'max_tokens' => 4000,
            'temperature' => 1.0,
        ];

        // Set the request headers
        $headers = [
            'Content-Type: application/json',
            'Authorization: Bearer ' . $key->apishares,
        ];

        // Set the request options
        $options = [
            'http' => [
                'method' => 'POST',
                'header' => implode("\r\n", $headers),
                'content' => json_encode($body),
            ],
        ];

        // Make the request and capture the response
        try {
            $response = file_get_contents($endpoint, false, stream_context_create($options));
        } catch (Exception $ex)
        {
            return inertia('Response', ['response' => 'Failed to retrieve the information!']);
        }

        // Extract the generated text from the response
        $res = json_decode($response, true);
        $text = $res['choices'][0]['text'];

        // return $text;

        // return $res;
        return inertia('Response', ['response' => $text]);
    }

    public function getAskImageGeneration(Request $req)
    {
        $key = apiShares::latest()->first();
        if($key == null || $key == [])
        {
            return inertia('Response', ['response' => 'API Key is null. Please share new key :)']);
        }

        $endpoint = 'https://api.openai.com/v1/images/generations';
        $options = [
            'http' => [
                'header' => [
                    'Content-Type: application/json',
                    'Authorization: Bearer ' . $key->apishares,
                ],
                'method' => 'POST',
                'content' => json_encode([
                    'prompt' => $req->prompt,
                    'n' => 1,
                    'size' => '1024x1024'
                ]),
            ],
        ];

        try {
            $response = file_get_contents($endpoint, false, stream_context_create($options));
        } catch (Exception $ex)
        {
            return inertia('Response', ['response' => 'Failed to retrieve the information!']);
        }

        // Extract the generated text from the response
        $res = json_decode($response, true);
        $url = $res['data'][0]['url'];
        
        // return $text;
        return inertia('ImgResponse', ['response' => $url]);
    }

    public function storeAPIKey(Request $req)
    {
        $key = new apiShares;
        $key->apishares = $req->key;
        $key->save();
        return redirect()->route('app');
    }
}
