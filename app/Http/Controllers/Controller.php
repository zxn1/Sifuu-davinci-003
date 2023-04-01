<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function askSifu(Request $req)
    {
        // dd($req);
        // return $req->prompt;
        // $res = null;

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
            'Authorization: Bearer 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',
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
        $response = file_get_contents($endpoint, false, stream_context_create($options));

        // Extract the generated text from the response
        $res = json_decode($response, true);
        $text = $res['choices'][0]['text'];

        // return $text;

        // return $res;
        return inertia('Response', ['response' => $text]);
    }
}
