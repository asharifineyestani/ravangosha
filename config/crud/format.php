<?php

use Hekmatinasser\Verta\Facades\Verta;

return [
    'shamsi' => function ($row) {
        return Verta::instance($row->created_at);
    },
    'number' => function ($row) {
        return number_format($row->price);
    },
    'star' => function ($row) {
        $value = config('crud.status.plans.type')[$row->type];
        $value = $row->extra ? $value . "($row->extra)" : $value;
        return $value;
    },
    'todo' => function ($row) {
        return 'TODO';
    },
    'userLink' => function ($row) {

        $title = $row->user->name ?? $row->user->mobile;
        $href = '/admin/users/' . $row->user->id;
        return view('crud::partials.link', compact('title', 'href'));
    },

    'team_logo' => function ($row) {
        $path = $row->logo_path;
        $alt = $row->name;
        return view('crud::partials.image', compact('path', 'alt'));
    },


    'host_name' => function ($row) {
        $teamId = $row->host_id;
        $team = \App\Models\Team::find($teamId);
        return $team->name;
    },


    'guest_name' => function ($row) {
        $teamId = $row->guest_id;
        $team = \App\Models\Team::find($teamId);
        return $team->name;
    },


    'event_date' => function ($row) {
         $row->event_date;
        return \Hekmatinasser\Verta\Facades\Verta::instance($row->event_date)->format('Y/n/j');

    },


];
