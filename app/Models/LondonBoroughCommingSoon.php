<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LondonBoroughCommingSoon extends Model
{
    use HasFactory;
    protected $table = 'london_borough_comming_soon_form';
    protected $fillable = [
        'name',
        'email',
        'area_name',
        'company_name',
    ];
    public function saveCommingSoonForm($data)
    {
        $this->fill($data)->save();
        return $this;
    }
    public function getCommingSoonMessages()
    {
        return $this->all();
    }
    public function manageMessage($action,$id)
    {
        if ($action === "delete") {
            $deleted =  $this->where('id', $id)->delete();
            if ($deleted) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}
