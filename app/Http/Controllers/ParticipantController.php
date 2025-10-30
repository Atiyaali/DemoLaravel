<?php

namespace App\Http\Controllers;
use App\models\Participant;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class ParticipantController extends Controller
{
    function index(){
        $participants =Participant::all();
        return response()->json(($participants),200);
    }
    function store(Request $request){
    //    dd($request->all());
        $validated = $request->validate([
        'is_team' => 'required|boolean',
        'team_name' => 'nullable|string|required_if:is_team,true',
        'participants' => 'required|array|max:255',
        'participants.*.name'=>'required|string|max:255',
        'participants.*.email'=>'required|email|max:255',
        'participants.*.phone'=>'required|digits_between:10,15',
        'participants.*.address'=>'required|string|max:255',
        'participants.*.is_confirmed'=>'required|boolean',
        'participants.*.is_team_leader'=>'required|boolean',
        ],[
            'participants.required'=>'Participants data is required',
            'participants.array'=>'Participants data must be an array',
            'participants.max'=>'Participants data must not exceed 255 items',
            'participants.*.name.required'=>'Name is required for each participant',
            'participants.*.email.required'=>'Email is required for each participant',
            'participants.*.phone.required'=>'Phone is required for each participant',
            'participants.*.address.required'=>'Address is required for each   participant',
            'participants.*.is_confirmed.required'=>'Confirmation status is required for each participant',
        ]);
        // dd($validated);
        $groupid = $validated['is_team']?Str::uuid():null;
        foreach($validated['participants'] as $pax){
            Participant::create([
                'name'=>$pax['name'],
                'email'=>$pax['email'],
                'phone'=>$pax['phone'],
                'address'=>$pax['address'],
                'is_confirmed'=>$pax['is_confirmed'],
                'is_team_leader'=>$pax['is_team_leader']??null,
                'auth_key'=>Str::random(16),
                'team_name'=>$validated['is_team']?$validated['team_name']:null,
                'registration_group_id'=>$groupid,

            ]);




        }
        // $participants = collect($validated['participants'])->map(function($participant){
        //  return [
        //   'name'=>$participant['name'],
        //   'email'=>$participant['email'],
        //   'phone'=>$participant['phone'],
        //   'address'=>$participant['address'],
        //   'is_confirmed'=>$participant['is_confirmed'],
        //   'auth_key'=>Str::random(16),
        //   'created_at'=>now(),
        //   'updated_at'=>now(),
        //  ];
        // })->toArray();
        // $groupParticipants = Participant::insert($participants);
        return response()->json([
        'message' => 'Registration successful',
        'is_team' => $validated['is_team'],
        'team_name' => $validated['team_name'] ?? null,
        'group_id' => $groupid,
    ], 201);

    }
}


//Payload example
// {
//   "participants": [
//     {
//       "name": "Ali",
//       "email": "ali@example.com",
//       "phone": "923001234567",
//       "address": "lahore",
//       "is_confirmed":true
//     },
//     {
//       "name": "Sara",
//       "email": "sara@example.com",
//       "phone": "923001234568",
//       "address": "chunian",
//       "is_confirmed":false
//     }
//   ]
// }
