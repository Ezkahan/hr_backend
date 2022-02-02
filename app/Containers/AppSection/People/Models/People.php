<?php

namespace App\Containers\AppSection\People\Models;

use App\Containers\AppSection\Education\Models\EducationType;
use App\Containers\AppSection\Skill\Models\Skill;
use App\Ship\Parents\Models\Model;
use Illuminate\Database\Eloquent\Builder;
use Spatie\Translatable\HasTranslations;

class People extends Model
{
    use HasTranslations;

    public $translatable = ['description'];

    protected $fillable = [
        'firstname',
        'lastname',
        'patronymic',
        'registered_at',
        'passport_series_id',
        'passport_no',
        'passport_issue_date',
        'passport_issued_by_id',
        'passport_comment',
        'born_date',
        'education_type_id',
        'marital',
        'children',
        'driver_classes',
        'military',
        'sentence',
        'dead',
        'gender',
        'relocation',
        'shift',
        'dontdisturb',
        'dontdisturb_notes',
        'vip',
        'vip_notes',
        'blacklist',
        'blacklist_notes',
        'status_comment',
        'hascar',
        'nationality_id',
        'min_salary',
        'salary_currency',
        'description',
        'email',
        'phone',
        'status',
    ];

    protected $attributes = [];

    protected $hidden = [];

    protected $casts = [
        'description' => 'json'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * A resource key to be used in the serialized responses.
     */
    protected string $resourceKey = 'People';

    public function passportSeries()
    {
        return $this->belongsTo(PassportSeries::class);
    }
    public function passportIssuedBy()
    {
        return $this->belongsTo(PassportIssuedBy::class);
    }
    public function educationType()
    {
        return $this->belongsTo(EducationType::class);
    }
    public function nationality()
    {
        return $this->belongsTo(Nationality::class);
    }

    public function skills()
    {
        return $this->belongsToMany(Skill::class, 'people_skill', 'people_id', 'skill_id')->withPivot('level');
    }

    public function scopeSearch(Builder $builder, string $search): Builder
    {
        return $builder->where('firstname', 'LIKE', '%' . $search . '%')
            ->orWhere('lastname', 'LIKE', '%' . $search . '%')
            ->orWhere('patronymic', 'LIKE', '%' . $search . '%')
            ->orWhere('born_date', 'LIKE', '%' . $search . '%')
            ->orWhere('passport_no', 'LIKE', '%' . $search . '%')
            ->orWhere('passport_comment', 'LIKE', '%' . $search . '%')
            ->orWhere('status_comment', 'LIKE', '%' . $search . '%');
    }

    public function getGenderAttribute($value)
    {
        return getGender($value);
    }

    public function setGenderAttribute($value)
    {
        return $this->attributes['gender'] = setGender($value);
    }

    public function getMaritalAttribute($value)
    {
        return getMarital($value);
    }

    public function setMaritalAttribute($value)
    {
        return $this->attributes['marital'] = setMarital($value);
    }

    public function getDescriptionAttribute()
    {
        return $this->getTranslations('description');
    }
}
