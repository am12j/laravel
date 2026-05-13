<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\complain;
use Illuminate\Http\Request;

class firstcontroller extends Controller
{
     public function signup(Request $request)
    {
        User::create($request->all());

        return "User Registered Successfully";
    }
    public function login(Request $request)
    {
        $count = User::where('username', $request->username)
                    ->where('password', $request->password)
                    ->count();

        if($count > 0)
        {
            return redirect('/dashboard');
        }
        else
        {
            return "Invalid Username or Password";
        }
    }
    public function complaintsubmit(Request $request)
    {
        complain::create($request->all());

        return "Complaint Submitted Successfully";
    }
    public function trackingsearch(Request $request)
    {   
         $data = complain::where('name', $request->name)->get();
        return view('trackingresult', compact('data'));
    }
    public function help(Request $request)
    {

        $message = $request->message;
        $apiKey = env('GEMINI_API_KEY');
        $url = "https://generativelanguage.googleapis.com/v1beta/models/gemini-2.5-flash:generateContent?key=".$apiKey;
        $prompt = "

        You are a Disaster Management Chatbot.

        Only answer questions related to:

        - flood
        - earthquake
        - cyclone
        - fire
        - tsunami
        - rescue help
        - emergency services
        - hospitals
        - relief camps
        - precautions
        - disaster safety
        - disaster management

        If user asks unrelated questions like:
        gym, movie, cricket, coding, relationship etc

        then reply only:

        Please ask disaster-management-related questions only.

        User Question:
        ".$message;

        $data = [

            "contents" => [

                [

                    "parts" => [

                        [

                            "text" => $prompt

                        ]

                    ]

                ]

            ]

        ];

        $payload = json_encode($data);

        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        curl_setopt($ch, CURLOPT_POST, true);

        curl_setopt($ch, CURLOPT_HTTPHEADER, [

            'Content-Type: application/json'

        ]);

        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

        $response = curl_exec($ch);

        curl_close($ch);

        $result = json_decode($response, true);
        
       
        $answer = $result['candidates'][0]['content']['parts'][0]['text'];
        


        return view('dashboard', compact('message', 'answer'));

    }
}
