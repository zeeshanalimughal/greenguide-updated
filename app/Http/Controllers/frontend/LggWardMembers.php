<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\LggWardMember;
use Illuminate\Http\Request;

class LggWardMembers extends Controller
{
    public function getAllMembers()
    {
        $members = LggWardMember::join('lgg_wards_list', 'lgg_wards_list.id', '=', 'lgg_ward_members.wardId')->where('lgg_wards_list.ward_status', 'active')->get(
            [
                'lgg_ward_members.*',
                'lgg_wards_list.id as lgg_ward_id',
                'lgg_wards_list.ward_title as lgg_ward_title'
            ]
        );
        $cabbinet_members = $members->filter(function ($member, $key) {
            return $member->party === "Conservative";
        });
        $shadow_cabbinet_members = $members->filter(function ($member, $key) {
            return $member->party === "Labour";
        });

        $other_members = $members->filter(function ($member, $key) {
            return $member->party !== "Conservative" && $member->party !== "Labour";
        });

        $addiscombe_east_members = $members->filter(function ($member, $key) {
            return $member->twitter === "@Jeet_Bains" || $member->twitter === "@MinsuR";
        });

        return view('frontend.ward-members', ['cabbinet_members' => $cabbinet_members, 'shadow_cabbinet_members' => $shadow_cabbinet_members, 'other_members' => $other_members, 'addiscombe_east_members' => $addiscombe_east_members]);
    }
}
