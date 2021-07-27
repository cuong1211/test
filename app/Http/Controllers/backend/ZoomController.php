<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Traits\ZoomJWT;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\model\Zoom;
use Illuminate\Support\Facades\Http;


class ZoomController extends Controller
{
    use ZoomJWT;

    const MEETING_TYPE_INSTANT = 1;
    const MEETING_TYPE_SCHEDULE = 2;
    const MEETING_TYPE_RECURRING = 3;
    const MEETING_TYPE_FIXED_RECURRING_FIXED = 8;

    public function getList(Request $request)
    {
        $path = 'users/me/meetings';
        $response = $this->zoomGet($path);

        $data = json_decode($response->body(), true);
        $data['meetings'] = array_map(function (&$m) {
            $m['start_at'] = $this->toUnixTimeStamp($m['start_time'], $m['timezone']);
            return $m;
        }, $data['meetings']);
        $x = $data['meetings'];

        // dd($x);
        // return [
        //     'success' => $response->ok(),
        //     'data' => $data,
        // ];



    }
    public function getZoom()
    {
        $zoom = Zoom::query()->get();
        return view('pages.backend.zoom.main', compact('zoom'));
    }

    public function getCreate()
    {
        return view('pages.backend.zoom.create');
    }

    public function postCreate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'topic' => 'required|string',
            'start_time' => 'required|date',
            'agenda' => 'string|nullable',
        ]);

        if ($validator->fails()) {
            return [
                'success' => false,
                'data' => $validator->errors(),
            ];
        }
        $data = $validator->validated();

        $path = 'users/me/meetings';
        $response = json_decode($this->zoomPost($path, [
            'topic' => $data['topic'],
            'type' => self::MEETING_TYPE_SCHEDULE,
            'start_time' => $this->toZoomTimeFormat($data['start_time']),
            'duration' => 30,

            'settings' => [
                'host_video' => false,
                'participant_video' => false,
                'waiting_room' => false,
            ]
        ])->body(), true);
        $zoom = Zoom::create([
            'course_id' => $request->course_id,
            'lesson_id' => $request->lesson_id,
            'unit_id' => $request->unit_id,
            'id' => $response['id'],
            'topic' => $response['topic'],
            'type' => $response['type'],
            'join_url' => $response['join_url'],
            'start_time' => $response['start_time'],
        ]); // add $data here
        $zoom->save();

        
        // return [
        //     'success' => $response->status() === 201,
        //     'data' => json_decode($response->body(), true),
        // ];
        if($zoom){
            return Http::post('https://discord.com/api/webhooks/867115875223339018/6-dOATPAv7FpCDGurqHLTo3tvOLnhFODk67pmNLDGoStTjMUjnac6T4KsswPSrC48Hda', [
                'content' => "có học sinh  {$response['id']} cần trợ giúp",
                
                'embeds' => [
                    [
                        'title' =>$response['topic'],
                        'description' => $response['start_time'],
                        'url' => $response['join_url'],
                        'author' => [
                            'name' => 'link zoom',
                        ],
                        'color' => '7506394',
                    ]
                ],
            ]);
            // return redirect('api/zoom');
        }
        return redirect('api/zoom')->with('error','Have trouble, Try again later.');
    }
    public function get(Request $request, string $id)
    {
        $path = 'meetings/' . $id;
        $response = $this->zoomGet($path);

        $data = json_decode($response->body(), true);
        if ($response->ok()) {
            $data['start_at'] = $this->toUnixTimeStamp($data['start_time'], $data['timezone']);
        }

        // return [
        //     'success' => $response->ok(),
        //     'data' => $data,
        // ];
        dd($data);
    }
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'topic' => 'required|string',
            'start_time' => 'required|date',
            'agenda' => 'string|nullable',
        ]);

        if ($validator->fails()) {
            return [
                'success' => false,
                'data' => $validator->errors(),
            ];
        }
        $data = $validator->validated();

        $path = 'meetings/' . $id;
        $response = $this->zoomPatch($path, [
            'topic' => $data['topic'],
            'type' => self::MEETING_TYPE_SCHEDULE,
            'start_time' => (new \DateTime($data['start_time']))->format('Y-m-d\TH:i:s'),
            'duration' => 30,

            'settings' => [
                'host_video' => false,
                'participant_video' => false,
                'waiting_room' => true,
            ]
        ]);

        return [
            'success' => $response->status() === 204,
            'data' => json_decode($response->body(), true),
        ];
    }
    public function delete(Request $request, string $id)
    {
        $zoom = Zoom::find($id)->delete();
        $path = 'meetings/' . $id;
        $response = $this->zoomDelete($path);

        // return [
        //     'success' => $response->status() === 204,
        //     'data' => json_decode($response->body(), true),
        // ];
        return redirect('api/zoom');
    }
}
